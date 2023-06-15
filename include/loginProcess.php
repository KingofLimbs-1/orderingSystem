<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Input data retrieval
    $name = $_POST['name'];
    $username = $_POST['username'];
    // ...

    // INPUT VALIDATION

    // User info validation
    if ($name === "User" && $username === "Donut") {
        $_SESSION['username'] = $username;
        header("Location: /index.php");
        exit();
    } else {
        echo "Invalid inputs";
    }
    // ...

    // INPUT VALIDATION END
}

?>