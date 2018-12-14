<?php
		if(isset($_POST['submit'])){
			$name=$_POST['name_contact'];
			$email=$_POST['email_contact'];
			$phone=$_POST['phone_contact'];
			$msg=$_POST['message_contact'];

			$to='pramod.neupane21@gmail.com';
			$subject='Form Submission';
			$message="Name: ".$name."\n"."Phone: ".$phone."\n"."Wrote the following: "."\n\n".$msg;
			$headers="From: ".$email;

			if(mail($to, $subject, $message, $headers)){
				echo"<h1>Sent Successfully!!!! Thank you"." ".$name.", We will contact you shortly</h1>";

			}
			else{
				echo"Something went wrong.";
				}
			}
		?>