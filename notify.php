<?php
// Check if email is set and valid
if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['email'];

    // Store email in a file (or you could connect to a database here)
    $file = 'subscribers.txt'; // File to store emails
    file_put_contents($file, $email . PHP_EOL, FILE_APPEND | LOCK_EX);

    // Send a response back to the form
    echo "success";
} else {
    echo "Invalid email";
}
?>
