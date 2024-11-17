<?php

$name = $_POST['firstname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];



$data = "Name: $name, Email: $email, Phone: $phone, Message: $message:\n";

// Specify the file to write to (it will create the file if it doesn’t exist)
$file = 'chess_user_data.txt';

// Write data to the file
file_put_contents($file, $data, FILE_APPEND);

// Confirmation message
echo "User information has been saved to a file.";

?>
