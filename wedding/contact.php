<?php

$name = $_POST['name'];
$contact = $_POST['contact'];
$comment = $_POST['comment'];
$message = $name . " send you a message. \n Contact: " . $contact . "\n Comment: " . $comment;

mail('zoller.eli@gmail.com', 'A message from ' . $name, $message);

header( 'Location: contact-success.php' ) ;
?>
