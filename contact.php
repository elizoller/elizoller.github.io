<?php
if(isset($_POST['submit']))  {
$subject = "A message from Eliwire";
$to = "zoller.eli@gmail.com";
$from = $_POST['email'];
$message = "A message from: " . $_POST['name'] . "/n" . $_POST['comments'];
mail($to, $from, $message, $subject);
echo "Your message was sent!";
}
else 
{
echo "There was an error. Make sure all the fields were filled out.";
}


?>