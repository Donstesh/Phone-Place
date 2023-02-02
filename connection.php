<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass_word = $_POST['pass_word'];
$confirm_password = $_POST['confirm_password'];
$phonenumber = $_POST['phonenumber'];

// database connection
$conn = new mysqli('localhost', 'root', '', '', 'phone_place');

if($conn->connect_error){
    die('connection failed: ' . $conn->connect_error);
} else {
    // Check if password and confirm password match
    if($pass_word != $confirm_password){
        echo "Passwords do not match";
    } else {
        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO registration(name, email, pass_word, confirm_password, phonenumber) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssi", $name, $email, $pass_word, $confirm_password, $phonenumber);
        $stmt->execute();
        echo "Registration successful";
        $stmt->close();
        $conn->close();
    }
}

?>