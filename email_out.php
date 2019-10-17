<?php
$title = "CRHS Robotics 2020 - ESPN Team";
include 'layouts/header.php';
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("j.alfahad@gmail.com","Email",$msg);
include 'layouts/footer.php';
?>
