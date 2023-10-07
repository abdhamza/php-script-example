<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SCRIPT EXAMPLE</title>
</head>
<body>
    <?php
    // Initialize the name variable
    $name = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the entered name
        $name = $_POST["name"];
    }
    ?>

    <h1>PHP SCRIPT EXAMPLE</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Display the greeting if a name is entered
    if (!empty($name)) {
        echo "<p>Hello $name, welcome to our website!</p>";
    }
    ?>
</body>
</html>