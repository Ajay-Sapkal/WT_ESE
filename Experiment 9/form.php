<?php
// Initialize variables for storing form data and error messages
$name = $email = $message = "";
$errors = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate input
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // Check if there are no errors
    if (empty($errors)) {
        echo "<h2>Success!</h2>";
        echo "<p>Thank you, <strong>$name</strong>!</p>";
        echo "<p>Your email: <strong>$email</strong></p>";
        echo "<p>Your message: <strong>$message</strong></p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Contact Us</h1>

<!-- Display error messages if any -->
<?php
if (!empty($errors)) {
    echo '<div style="color: red;">';
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    echo '</div>';
}
?>

<!-- HTML form for user input -->
<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required><?php echo $message; ?></textarea>

    <input type="submit" value="Submit">
</form>

</body>
</html>
