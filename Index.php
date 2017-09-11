<?php
	if (isset($_POST['signup']))
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $uname = $_POST['uname']
    $phone = $_POST['phone']
     $from = 'From: esportsatthee@gmail.com'; 
    $to = 'esportsatthee@gmail.com'; 
    $subject = 'Sign Up Information';
    $body = "From: $name\n E-Mail: $email\n TeamName: $password\n Game Name: $uname\n Phone: $phone" ;
    (mail ($to, $subject, $body, $from)) { 
?>


