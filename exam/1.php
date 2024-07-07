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

// Check if user is logged in and is a teacher
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'teacher') {
    // Redirect to SignIn page if not logged in as a teacher
    header("Location: login.php");
    exit();
}

// Get teacher's organization name from session
$organizationname = $_SESSION['organizationname'];

// Fetch students from the same organization
$sql_students = "SELECT id, name, email FROM users WHERE role='student' AND organizationname='$organizationname'";
$result_students = $conn->query($sql_students);

// Get scores for each student
$scores = array();
while ($row_student = $result_students->fetch_assoc()) {
    $student_id = $row_student['id'];
    $student_name = $row_student['name'];
    $student_email = $row_student['email'];

    // Fetch score percentage from scores table
    $sql_score = "SELECT score_percentage FROM scores WHERE user_id=$student_id";
    $result_score = $conn->query($sql_score);

    // If the student has a score, store it in the scores array
    if ($result_score->num_rows > 0) {
        $row_score = $result_score->fetch_assoc();
        $score_percentage = $row_score['score_percentage'];

        // Store the score percentage for this student
        $scores[] = array(
            'name' => $student_name,
            'email' => $student_email,
            'score_percentage' => $score_percentage
        );
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students' Scores</title>
</head>
<body>
    <h1>Students' Scores</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Score Percentage</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scores as $student_score): ?>
                <tr>
                    <td><?php echo $student_score['name']; ?></td>
                    <td><?php echo $student_score['email']; ?></td>
                    <td><?php echo $student_score['score_percentage']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
