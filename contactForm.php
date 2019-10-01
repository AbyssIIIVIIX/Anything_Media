<?php  

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$byemail = $_POST['byemail'];
	$byphone = $_POST['byphone'];
	$dont = $_POST['dont'];
	$message = $_POST['message'];

	$mailto = "thaibxer87@gmail.com";
	$headers = "From: ".$email;
	$txt = "You have mail from ".$name.".\n\n".$message;

mail($mailto, $name, $message, $headers);
header("Location: index.html?mailsend");
}




?>