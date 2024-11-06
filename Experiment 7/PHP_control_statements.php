<?php
// Default page content
$page = "home";

// Check if a page has been selected from the form
if (isset($_POST['page'])) {
    $page = $_POST['page'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Web Design</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header */
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        nav form {
            margin-top: 10px;
        }

        nav form button {
            background-color: #444;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
        }

        nav form button:hover {
            background-color: #555;
        }

        /* Main Content */
        main {
            padding: 20px;
            text-align: center;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Welcome to My Dynamic PHP Website</h1>
        <nav>
            <!-- Navigation using form buttons -->
            <form method="POST" action="">
                <button type="submit" name="page" value="home">Home</button>
                <button type="submit" name="page" value="about">About</button>
                <button type="submit" name="page" value="services">Services</button>
                <button type="submit" name="page" value="contact">Contact</button>
            </form>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <?php
        // Use switch control statement to display content based on selected page
        switch ($page) {
            case "home":
                echo "<h2>Home</h2>";
                echo "<p>Welcome to the home page of our dynamic website!</p>";
                break;
            case "about":
                echo "<h2>About</h2>";
                echo "<p>This website is designed using PHP control statements to display dynamic content.</p>";
                break;
            case "services":
                echo "<h2>Services</h2>";
                echo "<p>We offer a wide range of services including web design, development, and more.</p>";
                break;
            case "contact":
                echo "<h2>Contact</h2>";
                echo "<p>Feel free to contact us through email or phone.</p>";
                break;
            default:
                echo "<h2>Home</h2>";
                echo "<p>Welcome to the home page of our dynamic website!</p>";
                break;
        }
        ?>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Website. All Rights Reserved.</p>
    </footer>

</body>
</html>
