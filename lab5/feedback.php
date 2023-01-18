<?php
    require('db.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $taskOption = $_POST['taskOption'];
        echo $taskOption;

        $db->query("INSERT INTO messages (email, name, phone, message) VALUES ('$email', '$name', '$phone', '$message')");

        header('location:index.php');
    }
?>