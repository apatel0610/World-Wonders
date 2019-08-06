<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		
			$to = $_POST['email'];
			$subject = "Feedback submitted";

			$message = "
			<html>
				<head>
					<title>Thank you!</title>
				</head>
			<body>
				
				<p>Hello, " . $_POST['name'] ."</p><br/><br/>
				<p>Your feedback has been submitted successfully...</p>
				<p>We will get back to you for more information.</p>
				<p><img src='Images/thanks.gif' style='border-radius:20px;'/></p>
			</body>
			</html>
			";
		
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <apatel00610@gmail.com>' . "\r\n";
			$headers .= 'Cc: apatel00610@gmail.com' . "\r\n";

			mail($to,$subject,$message,$headers);
		
			$_POST = "";
	}
	
	
?> 