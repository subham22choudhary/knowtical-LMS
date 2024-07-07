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
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'student') {
    // Redirect to SignIn page if not logged in as a teacher
    header("Location: login.php");
    exit();
}

// Get teacher's organization name from session
$organizationname = $_SESSION['organizationname'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher - All Student Scores</title>
    <link href="https://knowtical.com/exam/css/app.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="teacher.php">
                    <span class="align-middle"><?php echo ucfirst($_SESSION['role']); ?></span>
                </a>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Teacher's Data Base
                    </li>
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="teach_allscores.php">
                            <i class="align-middle" data-feather="square"></i> <span class="align-middle">All Students Scores</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="quiz_crud.php">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Quizzes (CRUD)</span>
                        </a>
                    </li>
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
                    <h1 class="h3 mb-3"><strong>All Students Scores</strong> Dashboard</h1>

                    <!-- <div>
                        <?php
                            // Connect to your MySQL database
                            $host = 'localhost';
                            $username = 'root';
                            $password = '';
                            $database = 'quiz';

                            $conn = new mysqli($host, $username, $password, $database);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Execute SQL query to fetch data from the scores table
                            $sql = "SELECT * FROM scores";
                            $result = $conn->query($sql);

                            // Display fetched data in a HTML table
                            echo "<table border='1'>
                            <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>User Role</th>
                            <th>User Organization</th>
                            <th>Score Percentage</th>
                            <th>User ID</th>
                            </tr>";

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['user_name'] . "</td>";
                                    echo "<td>" . $row['user_role'] . "</td>";
                                    echo "<td>" . $row['user_organization'] . "</td>";
                                    echo "<td>" . $row['score_percentage'] . "</td>";
                                    echo "<td>" . $row['user_id'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "0 results";
                            }

                            echo "</table>";

                            // Close the connection
                            $conn->close();
                        ?>
                    </div> -->

                    <!-- <div>
                        <?php
                            // Connect to your MySQL database
                            $host = 'localhost';
                            $username = 'root';
                            $password = '';
                            $database = 'quiz';

                            $conn = new mysqli($host, $username, $password, $database);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Execute SQL query to fetch data from the users table
                            $sql = "SELECT * FROM users";
                            $result = $conn->query($sql);

                            // Display fetched data in a HTML table
                            echo "<table border='1'>
                            <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Organization Name</th>
                            </tr>";

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['password'] . "</td>";
                                    echo "<td>" . $row['role'] . "</td>";
                                    echo "<td>" . $row['organizationname'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "0 results";
                            }

                            echo "</table>";

                            // Close the connection
                            $conn->close();
                        ?>

                    </div>

                    <div>
                        <?php
                            // Connect to your MySQL database
                            $host = 'localhost';
                            $username = 'root';
                            $password = '';
                            $database = 'quiz';

                            $conn = new mysqli($host, $username, $password, $database);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Execute SQL query to fetch data from both tables based on the organization name
                            $sql = "SELECT u.*, s.score_percentage 
                                    FROM users u
                                    INNER JOIN scores s ON u.organizationname = s.user_organization";
                            $result = $conn->query($sql);

                            // Display fetched data in a HTML table
                            echo "<table border='1'>
                            <tr>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Organization Name</th>
                            <th>Score Percentage</th>
                            </tr>";

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['password'] . "</td>";
                                    echo "<td>" . $row['role'] . "</td>";
                                    echo "<td>" . $row['organizationname'] . "</td>";
                                    echo "<td>" . $row['score_percentage'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "0 results";
                            }

                            echo "</table>";

                            // Close the connection
                            $conn->close();
                        ?>
                    </div> -->

                    <!-- <div>
                        <?php
                            // Connect to your MySQL database
                            $host = 'localhost';
                            $username = 'root';
                            $password = '';
                            $database = 'quiz';

                            $conn = new mysqli($host, $username, $password, $database);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Execute SQL query to fetch data from both tables based on the organization name and role being 'student'
                            $sql = "SELECT u.*, s.score_percentage 
                                    FROM users u
                                    INNER JOIN scores s ON u.organizationname = s.user_organization
                                    WHERE u.role = 'student'";
                            $result = $conn->query($sql);

                            // Display fetched data in a HTML table
                            echo "<table border='1'>
                            <tr>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Organization Name</th>
                            <th>Score Percentage</th>
                            </tr>";

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['password'] . "</td>";
                                    echo "<td>" . $row['role'] . "</td>";
                                    echo "<td>" . $row['organizationname'] . "</td>";
                                    echo "<td>" . $row['score_percentage'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "0 results";
                            }

                            echo "</table>";

                            // Close the connection
                            $conn->close();
                        ?>
                    </div> -->





                    <div>
                        <?php

                            // Check if the user is logged in as a teacher
                            if (isset($_SESSION['role']) && $_SESSION['role'] === 'student') {
                                // Database connection
                                $host = 'localhost';
                                $username = 'root';
                                $password = '';
                                $database = 'quiz';

                                $conn = new mysqli($host, $username, $password, $database);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Get the organization name of the teacher from the session
                                $organizationname = $_SESSION['organizationname'];

                                // Execute SQL query to fetch data from both tables based on the organization name and role being 'student'
                                $sql = "SELECT u.*, s.score_percentage 
                                        FROM users u
                                        INNER JOIN scores s ON u.organizationname = s.user_organization
                                        WHERE u.role = 'student' AND u.organizationname = '$organizationname'";
                                $result = $conn->query($sql);

                                // Display fetched data in an HTML table
                                echo "<table border='1'>
                                        <tr>
                                            <th>User ID</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Organization Name</th>
                                            <th>Score Percentage</th>
                                        </tr>";

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['password'] . "</td>";
                                        echo "<td>" . $row['role'] . "</td>";
                                        echo "<td>" . $row['organizationname'] . "</td>";
                                        echo "<td>" . $row['score_percentage'] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "0 results";
                                }

                                echo "</table>";

                                // Close the connection
                                $conn->close();
                            } else {
                                // Redirect to the login page if the user is not logged in as a teacher
                                header("Location: login.php");
                                exit();
                            }
                        ?>
                    </div>
  
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
