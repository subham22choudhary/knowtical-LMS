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

// Check if user is already logged in
if (isset($_SESSION['role'])) {
    // Redirect to Dashboard page if already logged in
    header("Location: index.php");
    exit();
}

// SignUp Page
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Student, Teacher, or Admin
    $organizationname = $_POST['organizationname']; // School/organization Name
    
    // Check if the user is already registered
    $check_sql = "SELECT * FROM users WHERE email='$email' AND organizationname='$organizationname'";
    $check_result = $conn->query($check_sql);
    if ($check_result->num_rows > 0) {
        echo "You have already registered. Please sign in.";
    } else {
        // Insert new user into the database
        $sql = "INSERT INTO users (name, email, password, role, organizationname) VALUES ('$name', '$email', '$password', '$role', '$organizationname')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// SignIn Page
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Set session variables
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['organizationname'] = $row['organizationname']; // Ensure this line is present

        // Set the user_id in the session
        $_SESSION['user_id'] = $row['id']; // Assuming 'id' is the column name in the 'users' table
        
        // Redirect based on role
        switch ($_SESSION['role']) {
            case 'student':
                header("Location: student.php");
                break;
            case 'teacher':
                header("Location: teacher.php");
                break;
            case 'admin':
                header("Location: admin.php");
                break;
            default:
                // Redirect to index.php by default
                header("Location: index.php");
                break;
        }
        exit();
    } else {
        echo "Invalid email or password";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
    <link rel="stylesheet" href="https://knowtical.com/exam/css/bootstrap.min.css">
</head>
<body>

<style>
    form.su {
    display: flex;
    flex-direction: column;
}
</style>



<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-signup-tab" data-bs-toggle="pill" data-bs-target="#pills-signup" type="button" role="tab" aria-controls="pills-signup" aria-selected="true">signup</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-signin-tab" data-bs-toggle="pill" data-bs-target="#pills-signin" type="button" role="tab" aria-controls="pills-signin" aria-selected="false">signin</button>
  </li>
</ul>


<div class="tab-content" id="pills-tabContent">


    <div class="tab-pane fade show active" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
    
        <div class="row justify-content-center">
        <div class="col-md-6 col-12">
            <form method="post" action="" class="su">
                <h2>Sign Up</h2>

                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>
                
                <label for="password">Password:</label>
                <input type="password" name="password" required>        
                
                <label for="role">Role:</label>
                <select name="role" required>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                </select>

                <label for="organizationname">Organization Name:</label>
                <input type="text" name="organizationname" required>
                

                <input type="submit" name="signup" value="Sign Up">
            </form>
        </div>
        </div>

    </div>


  <div class="tab-pane fade" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
        <div>
            <form method="post" action="">
                <h2>Sign In</h2>

                <label for="signin-email">Email:</label>
                <input type="email" name="email" required>

                <label for="signin-password">Password:</label>
                <input type="password" name="password" required>
                <input type="submit" name="signin" value="Sign In">
            </form>
        </div>
  </div>


</div>

    <!-- Sign Up Form -->


    <!-- Sign In Form -->



    <script src="https://knowtical.com/exam/js/bootstrap.min.js"></script>
</body>
</html>