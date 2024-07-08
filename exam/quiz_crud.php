<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['name'])) {
    die("You must be logged in to view this page.");
}

// Database connection
$host = '127.0.0.1:3306';
$username = 'u304902958_knlms';
$password = 'Dipyadhosting@2024';
$database = 'u304902958_lmspanel';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Quiz
if (isset($_POST['create_quiz'])) {
    $quiz_name = $conn->real_escape_string($_POST['quiz_name']);
    $creator_name = $_SESSION['name']; // Assuming the user's name is stored in the session

    // Check if the quiz already exists
    $check_sql = "SELECT * FROM quizzes WHERE quiz_name = '$quiz_name'";
    $check_result = $conn->query($check_sql);
    if ($check_result->num_rows == 0) {
        // Insert quiz into database
        $sql = "INSERT INTO quizzes (quiz_name, creator_name) VALUES ('$quiz_name', '$creator_name')";
        if ($conn->query($sql) === TRUE) {
            $quiz_id = $conn->insert_id;

            // Insert questions into database
            $questions = $_POST['questions'];
            foreach ($questions as $question) {
                $question_name = $conn->real_escape_string($question['question_name']);
                $time_alloted = $conn->real_escape_string($question['time_alloted']);
                $sql = "INSERT INTO questions (quiz_id, question_name, time_alloted) VALUES ('$quiz_id', '$question_name', '$time_alloted')";
                if ($conn->query($sql) === TRUE) {
                    $question_id = $conn->insert_id;

                    // Insert options into database
                    foreach ($question['options'] as $option) {
                        $option_text = $conn->real_escape_string($option['option_text']);
                        $is_right = isset($option['is_right']) ? 1 : 0;
                        $sql = "INSERT INTO options (question_id, option_text, is_right) VALUES ('$question_id', '$option_text', '$is_right')";
                        $conn->query($sql);
                    }
                }
            }
            //echo "Quiz created successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        
        //echo "Quiz with this name already exists.";
    }
}

// Delete Quiz
if (isset($_POST['delete_quiz'])) {
    $quiz_id = $conn->real_escape_string($_POST['quiz_id']);

    // Delete options associated with the questions of the quiz
    $sql = "DELETE options FROM options INNER JOIN questions ON options.question_id = questions.id WHERE questions.quiz_id = $quiz_id";
    if ($conn->query($sql) === TRUE) {
        // Delete questions associated with the quiz
        $sql = "DELETE FROM questions WHERE quiz_id = $quiz_id";
        if ($conn->query($sql) === TRUE) {
            // Delete the quiz itself
            $sql = "DELETE FROM quizzes WHERE id = $quiz_id";
            if ($conn->query($sql) === TRUE) {
                //echo "Quiz deleted successfully";
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error: " . $conn->error;
    }
}

// Fetch quizzes, questions, and options for the logged-in user only
$logged_in_user = $_SESSION['name'];

$sql = "
    SELECT 
        quizzes.id AS quiz_id,
        quizzes.quiz_name, 
        quizzes.creator_name,
        questions.id AS question_id, 
        questions.question_name, 
        questions.time_alloted,
        GROUP_CONCAT(options.option_text SEPARATOR ', ') AS options,
        GROUP_CONCAT(CASE WHEN options.is_right = 1 THEN options.option_text END SEPARATOR ', ') AS right_answers
    FROM quizzes
    LEFT JOIN questions ON quizzes.id = questions.quiz_id
    LEFT JOIN options ON questions.id = options.question_id
    WHERE quizzes.creator_name = '$logged_in_user'
    GROUP BY quizzes.id, questions.id
    ORDER BY quizzes.quiz_name, questions.id";

$result = $conn->query($sql);

$quizzes = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $quizzes[$row['quiz_id']]['quiz_name'] = $row['quiz_name'];
        $quizzes[$row['quiz_id']]['creator_name'] = $row['creator_name'];
        $quizzes[$row['quiz_id']]['questions'][$row['question_id']] = [
            'question_name' => $row['question_name'],
            'time_alloted' => $row['time_alloted'],
            'options' => explode(', ', $row['options']),
            'right_answers' => explode(', ', $row['right_answers'])
        ];
    }
}
?>
<!-- Student -->
<?php
 

 // Determine the correct dashboard page based on the user's role
 $dashboardPage = '';
 if (isset($_SESSION['role'])) {
     switch ($_SESSION['role']) {
         case 'student':
             $dashboardPage = 'student.php';
             break;
         case 'teacher':
             $dashboardPage = 'teacher.php';
             break;
         case 'admin':
             $dashboardPage = 'admin.php';
             break;
         default:
             $dashboardPage = 'index.php'; // Fallback to a default page if needed
             break;
     }
 }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<title>Knowtical</title>
	<link href="https://knowtical.com/exam/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">

			<nav id="sidebar" class="sidebar js-sidebar">
				<div class="sidebar-content js-simplebar">
					<a class="sidebar-brand" href="<?php echo $dashboardPage; ?>">
					<span class="align-middle"><?php echo ucfirst($_SESSION['role']); ?></span>
					</a>
					<ul class="sidebar-nav">





						<!--Admin  -->
						<?php if($_SESSION['role'] == 'admin'): ?>
							<li class="sidebar-header">
								Admin Channel
							</li>
							<li class="sidebar-item">
								<a class="sidebar-link" href="charts-chartjs.html">
								<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">All Database</span>
								</a>
							</li>
							<li class="sidebar-item">
								<a class="sidebar-link" href="maps-google.html">
								<i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
								</a>
							</li>
						<?php endif; ?>



						<!-- Student -->
						<?php if($_SESSION['role'] == 'student' || $_SESSION['role'] == 'teacher' || $_SESSION['role'] == 'admin'): ?>
						<li class="sidebar-header">
							Self Board
						</li>
						<li class="sidebar-item ">
							<a class="sidebar-link" href="<?php echo $dashboardPage; ?>">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="profile.php">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
							</a>
						</li>
						<?php endif; ?>
    



						<!-- Teacher -->
						<?php if($_SESSION['role'] == 'teacher' || $_SESSION['role'] == 'admin'): ?>

						<li class="sidebar-header">
							Teacher's Data Base
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="org_student_db.php">
							<i class="align-middle" data-feather="square"></i> <span class="align-middle">All Students Database</span>
							</a>
						</li>
                        <li class="sidebar-item active">
							<a class="sidebar-link" href="quiz_crud.php ">
							<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Quizes (CRUD)</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="ui-forms.html">
							<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Quiz Resuts</span>
							</a>
						</li>


						<?php endif; ?>



					</ul>

				</div>
			</nav>

			<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
			<a class="sidebar-toggle js-sidebar-toggle">
			<i class="hamburger align-self-center"></i>
			</a>
			<div class="navbar-collapse collapse">
				<ul class="navbar-nav navbar-align">

				



					<li class="nav-item dropdown">
						<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
						<i class="align-middle" data-feather="settings"></i>
						</a>
						<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
						 <span class="text-dark"><span>Hello</span> <?php echo $_SESSION['name']; ?>!</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end">

						<form method="post" action="logout.php">
							<!-- Logout button -->
							<input class="dropdown-item" type="submit" name="logout" value="Logout">
						</form>
						</div>
					</li>
				</ul>
			</div>
			</nav>


			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Quiz</strong> Dashboard</h1>




                    <div class="container mt-5">
        <h1>Create Quiz</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="quiz_name">Quiz Name</label>
                <input type="text" class="form-control" id="quiz_name" name="quiz_name" required>
            </div>
            <div id="questions-container">
                <!-- Questions will be dynamically added here -->
            </div>
            <button type="button" class="btn btn-secondary" onclick="addQuestion()">Add Question</button>
            <button type="submit" class="btn btn-primary" name="create_quiz">Create Quiz</button>
        </form>

        <!-- Display quizzes in a table with CRUD buttons -->
        <div class="mt-5">
            <h1>Quiz Details</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Quiz Name</th>
                        <th>Creator Name</th>
                        <th>Question Name</th>
                        <th>Time Alloted (seconds)</th>
                        <th>Options</th>
                        <th>Right Answers</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($quizzes as $quiz_id => $quiz): ?>
                        <tr>
                            <td rowspan="<?php echo count($quiz['questions']) ?: 1; ?>"><?php echo htmlspecialchars($quiz['quiz_name']); ?></td>
                            <td rowspan="<?php echo count($quiz['questions']) ?: 1; ?>"><?php echo htmlspecialchars($quiz['creator_name']); ?></td>
                            <?php if (count($quiz['questions'])): ?>
                                <?php foreach ($quiz['questions'] as $question_id => $question): ?>
                                    <td><?php echo htmlspecialchars($question['question_name']); ?></td>
                                    <td><?php echo htmlspecialchars($question['time_alloted']); ?></td>
                                    <td><?php echo htmlspecialchars(implode(', ', $question['options'])); ?></td>
                                    <td><?php echo htmlspecialchars(implode(', ', $question['right_answers'])); ?></td>
                                    <td>
                                        <!-- Delete Quiz Form -->
                                        <form method="post" action="" class="d-inline">
                                            <input type="hidden" name="quiz_id" value="<?php echo htmlspecialchars($quiz_id); ?>">
                                            <button type="submit" class="btn btn-danger btn-sm" name="delete_quiz">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <td colspan="6">No questions found.</td>
                            </tr>
                            <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- JavaScript for dynamic form fields -->
    <script>
        let questionIndex = 0;

        function addQuestion() {
            const questionTemplate = `
                <div class="card mt-3" id="question-card-${questionIndex}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="questions[${questionIndex}][question_name]">Question Name</label>
                            <input type="text" class="form-control" id="questions[${questionIndex}][question_name]" name="questions[${questionIndex}][question_name]" required>
                        </div>
                        <div class="form-group">
                            <label for="questions[${questionIndex}][time_alloted]">Time Alloted (seconds)</label>
                            <input type="number" class="form-control" id="questions[${questionIndex}][time_alloted]" name="questions[${questionIndex}][time_alloted]" required>
                        </div>
                        <div id="options-container-${questionIndex}">
                            <!-- Options will be dynamically added here -->
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="addOption(${questionIndex})">Add Option</button>
                        <button type="button" class="btn btn-danger" onclick="removeQuestion(${questionIndex})">Remove Question</button>
                    </div>
                </div>
            `;
            document.getElementById('questions-container').insertAdjacentHTML('beforeend', questionTemplate);
            questionIndex++;
        }

        function addOption(questionIndex) {
            const optionIndex = document.querySelectorAll(`#options-container-${questionIndex} .form-group`).length;
            const optionTemplate = `
                <div class="form-group" id="option-${questionIndex}-${optionIndex}">
                    <label for="questions[${questionIndex}][options][${optionIndex}][option_text]">Option ${optionIndex + 1}</label>
                    <input type="text" class="form-control" id="questions[${questionIndex}][options][${optionIndex}][option_text]" name="questions[${questionIndex}][options][${optionIndex}][option_text]" required>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="questions[${questionIndex}][options][${optionIndex}][is_right]" name="questions[${questionIndex}][options][${optionIndex}][is_right]">
                        <label class="form-check-label" for="questions[${questionIndex}][options][${optionIndex}][is_right]">Is Correct</label>
                    </div>
                    <button type="button" class="btn btn-danger btn-sm" onclick="removeOption(${questionIndex}, ${optionIndex})">Remove Option</button>
                </div>
            `;
            document.getElementById(`options-container-${questionIndex}`).insertAdjacentHTML('beforeend', optionTemplate);
        }

        function removeQuestion(questionIndex) {
            const questionCard = document.getElementById(`question-card-${questionIndex}`);
            questionCard.parentNode.removeChild(questionCard);
        }

        function removeOption(questionIndex, optionIndex) {
            const option = document.getElementById(`option-${questionIndex}-${optionIndex}`);
            option.parentNode.removeChild(option);
        }
    </script>



				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Knowtical</strong></a> &copy; <?php echo date("Y");?>
							</p>
						</div>

						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="https://knowtical.com/exam/js/app.js"></script>



</body>

</html>