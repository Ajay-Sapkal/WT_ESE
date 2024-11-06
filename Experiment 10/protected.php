<?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page
    exit;
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: login.php"); // Redirect to login page
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 50px;
        }
        .welcome-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>

<div class="welcome-container">
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>You are now logged in and can access protected content.</p>
    <a href="protected.php?logout=true">Logout</a>
</div>

</body>
</html>
