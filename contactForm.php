<?php  

// Please specify your Mail Server - Example: mail.yourdomain.com.
ini_set("SMTP","thaibxer87@gmail.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'thaibxer87@gmail.com');

if(isset($_POST['send'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$mailto = 'thaibxer87@gmail.com';
	$headers ="From: ".$email;
	$txt = "Name: ".$name."\n"."Phone: ".$phone."\n\n"."Message:".$message;

	if(mail($mailto, $headers, $txt)){
	echo "Success, Thanks you for your Time !.".$name."We'll contact you shortley.";

	}
	
	else {
		echo "Something Went Wrong";
	}

}


?>