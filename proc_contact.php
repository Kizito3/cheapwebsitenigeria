<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);


$fname = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$plan = $_POST['plan'];
$message = $_POST['message'];

if (!$fname || !$email || !$phone || !$company || !$plan ||!$message)
{
    $error = 'Please fill in all fields.';
    include('contact.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $error = 'Please enter a valid email address.';
    include('contact.php');
    exit;
}
$to = 'chigokizzy@gmail.com';
$subject = 'Message from contact form';
$from = "From: contact@arretamanda.com";

$content = 'Below are the details that were filled:'."\n"
            .'First name: '.$fname."\n"
            .'Email: '.$email."\n"
            .'Plan: '.$plan."\n"
            .'Phone: '.$phone."\n";

mail($to, $subject, $content, $from);
header('location: contact.php?succ=yes');





?>