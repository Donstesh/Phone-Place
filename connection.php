<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass_word = $_POST['pass_word'];
$confirm_password = $_POST['confirm_password'];
$phonenumber = $_POST['phonenumber'];



// database connection

$conn = new mysqli('localhost', 'root', '', 'phone_place');

if($conn-> connect_error){
    die('connection failed :' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(name, email, pass_word, confirm_password, phonenumber)
    values(?,?,?,?,?)");
    $stmt->bind_param("ssssi", $name, $email, $pass_word, $confirm_password, $phonenumber);
    $stmt->execute();
    echo "Registration successfully";
    $stmt->close();
    $conn->close();
}