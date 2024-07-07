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

// Check if user is logged in
if(!isset($_SESSION['role'])) {
    // Redirect to SignIn page if not logged in
    header("Location: login.php");
    exit();
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


    <style>
            button, input, optgroup, select, textarea {
                width: 100%;
                min-width: 21rem;
            }
            .password-wrapper {
                position: relative;
                display: inline-block;
            }
            .password-wrapper input[type="password"] {
                padding-right: 30px;
            }
            .password-wrapper .toggle-password {
                position: absolute;
                right: 8px;
                top: 70%;
                transform: translateY(-50%);
                cursor: pointer;
            }
     
    </style>


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
                        <?php if ($_SESSION['role'] == 'student' || $_SESSION['role'] == 'teacher' || $_SESSION['role'] == 'admin'): ?>
                            <li class="sidebar-header">
                                Self Board
                            </li>
                            <li class="sidebar-item ">
                                <a class="sidebar-link" href="<?php echo $dashboardPage; ?>">
                                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item active">
                                <a class="sidebar-link" href="profile.php">
                                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                                </a>
                            </li>

                            <?php if ($_SESSION['role'] == 'student'): ?>
                            <li class="sidebar-item ">
                                <a class="sidebar-link" href="stu_quiz.php">
                                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Take Quiz</span>
                                </a>
                            </li>
                            <?php endif; ?>
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
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-forms.html">
                                <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Quiz Resuts</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-cards.html">
                                <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Quizes (CRUD)</span>
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

                        <h1 class="h3 mb-3"><strong>Profile</strong> Dashboard</h1>

                        <div class="row">
                            <div class="col-xl-6 col-xxl-5 d-flex">
                            <div class="card">
                                                <div class="card-body">


                                                    <h1>User Profile</h1>


                                                    <?php
                                                                                                            
                                                        $email = $_SESSION['email'];

                                                        // Update user details
                                                        if (isset($_POST['update'])) {
                                                            $name = $_POST['name'];
                                                            $new_email = $_POST['email'];
                                                            $organizationname = $_POST['organizationname'];
                                                            $password = $_POST['password'];

                                                            $update_sql = "UPDATE users SET name='$name', email='$new_email', organizationname='$organizationname', password='$password' WHERE email='$email'";
                                                            
                                                            if ($conn->query($update_sql) === TRUE) {
                                                                $_SESSION['email'] = $new_email; // Update session email if changed
                                                                echo "Profile updated successfully";
                                                            } else {
                                                                echo "Error: " . $conn->error;
                                                            }
                                                        }

                                                        // Fetch user details
                                                        $sql = "SELECT * FROM users WHERE email='$email'";
                                                        $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                            $user = $result->fetch_assoc();
                                                        } else {
                                                            echo "User not found";
                                                            exit();
                                                        }

                                                    ?>
                                                                
                                                    <form method="post" action="">
                                                        Name: <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required><br>
                                                        Email: <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br>
                                                        Organization Name: <input type="text" name="organizationname" value="<?php echo htmlspecialchars($user['organizationname']); ?>" required><br>
                                                        <div class="password-wrapper">
                                                            Password: <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($user['password']); ?>" required>
                                                            <span class="toggle-password" onclick="togglePassword()">👁️</span>
                                                        </div><br>
                                                        <input type="submit" name="update" value="Update Profile">
                                                    </form>

                                                    <script>
                                                        function togglePassword() {
                                                            var passwordField = document.getElementById("password");
                                                            var passwordFieldType = passwordField.getAttribute("type");
                                                            if (passwordFieldType == "password") {
                                                                passwordField.setAttribute("type", "text");
                                                            } else {
                                                                passwordField.setAttribute("type", "password");
                                                            }
                                                        }
                                                    </script>

                                                </div>
                                            </div>
                            </div>


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