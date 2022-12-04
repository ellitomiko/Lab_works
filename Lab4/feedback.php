<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $taskOption = $_POST['taskOption'];
        echo $taskOption;
        $root = simplexml_load_file("data.xml") or die("Error: Cannot create object");
        
        $report = $root->addChild('report', '');
        $report->addAttribute('id', $root->count());
        $report->addAttribute('email', $email);
        $report->addChild('name', $name);
        $report->addChild('phone', $phone);
        $report->addChild('message', $message);
       

        $root->saveXML('data.xml');

        //header('location:index.php');
    }
?>