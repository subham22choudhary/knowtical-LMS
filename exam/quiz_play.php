<?php
session_start();

// Database connection
$host = '127.0.0.1:3306';
$username = 'u304902958_knlms';
$password = 'Dipyadhosting@2024';
$database = 'u304902958_lmspanel';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch quiz questions and time allotted for each question from the database
$sql = "SELECT questions.id AS question_id, questions.question_name, questions.time_alloted, options.id AS option_id, options.option_text, options.is_right
        FROM questions
        INNER JOIN options ON questions.id = options.question_id";
$result = $conn->query($sql);

$questions = []; // Array to store questions and correct options
$total_time_alloted = 0; // Total time allotted for the quiz
while ($row = $result->fetch_assoc()) {
    $questions[$row['question_id']]['question_name'] = $row['question_name'];
    $questions[$row['question_id']]['time_alloted'] = $row['time_alloted'];
    $questions[$row['question_id']]['options'][$row['option_id']] = [
        'option_text' => $row['option_text'],
        'is_right' => $row['is_right']
    ];
    // Calculate total time allotted for the quiz
    $total_time_alloted += $row['time_alloted'];
}

// Process form submission
if (isset($_POST['submit_quiz'])) {
// Calculate the score
$total_questions = 0;
$correct_answers = 0;
$user_id = $_SESSION['user_id']; // Assuming you have stored the user's ID in the session

    // Insert user's selected options into the quiz_answers table
    foreach ($_POST['answer'] as $question_id => $selected_options) {
    $question_id = $conn->real_escape_string($question_id);
    foreach ($selected_options as $selected_option) {
        $selected_option = $conn->real_escape_string($selected_option);
        $sql = "INSERT INTO quiz_answers (user_id, question_id, selected_option) VALUES ('$user_id', '$question_id', '$selected_option')";
        $conn->query($sql);
    }

    // Calculate the score
    $total_questions++;
    $correct_for_question = true;
    $correct_options = array_filter($questions[$question_id]['options'], function($option) {
        return $option['is_right'] == 1;
    });
    $correct_option_ids = array_keys($correct_options);
    $selected_option_ids = $selected_options;
    sort($correct_option_ids);
    sort($selected_option_ids);

    if ($correct_option_ids == $selected_option_ids) {
            $correct_answers++;
        }
    }

    // Calculate the user's score
    $score_percentage = ($correct_answers / $total_questions) * 100;

    // Insert user's score into the scores table
    $user_name = $_SESSION['name'];
    $user_role = $_SESSION['role'];
    $user_organization = $_SESSION['organizationname'];
    $sql = "INSERT INTO scores (user_name, user_role, user_organization, score_percentage) VALUES ('$user_name', '$user_role', '$user_organization', '$score_percentage')";
    $conn->query($sql);

    // Redirect to stu_score.php to display the score
    header("Location: stu_score.php?score=$score_percentage&message=Time%20Completed");
    exit();
}

// Display the quiz questions
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Play</title>
</head>
<body>
    <h1>Quiz</h1>
    <div id="countdown"></div>
    <form action="" method="post" id="quizForm">
        <?php 
        $totalTime = 0; // Variable to store total time allotted for all questions
        foreach ($questions as $question_id => $question): 
            // Calculate total time allotted for each question
            $totalTime += $question['time_alloted'];
        ?>
            <h3><?php echo $question['question_name']; ?></h3>
            <?php foreach ($question['options'] as $option_id => $option): ?>
                <input type="checkbox" name="answer[<?php echo $question_id; ?>][]" value="<?php echo $option_id; ?>"><?php echo $option['option_text']; ?><br>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <input type="submit" name="submit_quiz" value="Submit Quiz">
    </form>

    <script>
    // Countdown timer script
    const quizForm = document.getElementById('quizForm');
    const countdownDiv = document.getElementById('countdown');
    let timeLeft = <?php echo $totalTime; ?>; // Total time allotted for the quiz in seconds
    let hasSwitchedTab = false; // Flag to track if the user has switched tabs

    function updateCountdown() {
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        countdownDiv.innerHTML = `Time Left: ${minutes}m ${seconds}s`;

        if (timeLeft === 0) {
            console.log('Time Completed');
            clearInterval(timer); // Stop the timer when time is up
            console.log('Timer Stopped');
            window.location.href = 'stu_score.php?message=Time%20Exceeded'; // Redirect to stu_score.php with message
        } else {
            timeLeft--;
        }
    }

    const timer = setInterval(updateCountdown, 1000); // Update countdown every second

    // Event listener for visibility change
    document.addEventListener('visibilitychange', function() {
        if (document.visibilityState === 'visible') {
            // The tab has become visible
            console.log('Tab is visible');
        } else {
            // The tab has been hidden
            console.log('Tab is hidden');
            if (!hasSwitchedTab) {
                // First time the user switches tabs
                alert('Please do not switch tabs during the quiz.');
                hasSwitchedTab = true;
            } else {
                // Second time the user switches tabs
                alert('You have switched tabs multiple times. The quiz will now be closed.');
                clearInterval(timer); // Stop the timer
                window.location.href = 'stu_score.php?message=Quiz%20Closed'; // Redirect to stu_score.php with message
            }
        }
    });
</script>

    <!-- <script>
        // Countdown timer script
        const quizForm = document.getElementById('quizForm');
        const countdownDiv = document.getElementById('countdown');
        let timeLeft = <?php echo $totalTime; ?>; // Total time allotted for the quiz in seconds

        function updateCountdown() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            countdownDiv.innerHTML = `Time Left: ${minutes}m ${seconds}s`;

            if (timeLeft === 0) {
                console.log('Time Completed');
                clearInterval(timer); // Stop the timer when time is up
                console.log('Timer Stopped');
                window.location.href = 'stu_score.php?message=Time%20Exceeded'; // Redirect to stu_score.php with message
            } else {
                timeLeft--;
            }
        }

        const timer = setInterval(updateCountdown, 1000); // Update countdown every second
    </script> -->
</body>
</html>
