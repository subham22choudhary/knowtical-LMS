<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['role'])) {
    // Redirect to SignIn page if not logged in
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    
    <div>
        <!-- Show user name and role -->
        <p>User: <?php echo $_SESSION['name']; ?></p>
        <p>Role: <?php echo ucfirst($_SESSION['role']); ?></p>
    </div>
    
    <form method="post" action="logout.php">
        <!-- Logout button -->
        <input type="submit" name="logout" value="Logout">
    </form>

    <?php if($_SESSION['role'] == 'student' || $_SESSION['role'] == 'teacher' || $_SESSION['role'] == 'admin'): ?>
        <h1 id="studenty">Hello Student</h1>
    <?php endif; ?>
    
    <?php if($_SESSION['role'] == 'teacher' || $_SESSION['role'] == 'admin'): ?>
        <h1 id="teachery">Hello Teacher</h1>
    <?php endif; ?>
    
    <?php if($_SESSION['role'] == 'admin'): ?>
        <h1 id="adminy">Hello Admin</h1>
    <?php endif; ?>
</body>
</html>
