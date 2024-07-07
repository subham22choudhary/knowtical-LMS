
<?php
session_start();

if (isset($_GET['score'])) {
    $score = $_GET['score'];
    echo "<h1>Your Score: $score%</h1>";
} else {
    echo "<h1>Score not found</h1>";
}

if (isset($_GET['message']) && $_GET['message'] === 'Time Exceeded') {
    echo "<p>Time Exceeded. Please go back to <a href='student.php'>Student Page</a>.</p>";
}
?>
<a href="student.php">Back to Home</a>

