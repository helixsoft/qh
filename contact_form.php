<?php
	include('../../../wp-load.php');
	$name=$_POST['name'];
	$email=$_POST['mail'];
	$msg=$_POST['msg'];
	$subject='QH Contact Form Submission';
	$message = '<html>';
	$message .= '<body>
		<strong>Name</strong>:</strong> ' . $name . '<br/>
		<strong>Email</strong>:</strong> ' . $email . '<br/>
		<strong>Message</strong> ' . $msg . '<br/>
		</body></html>';
		// To send HTML mail, the Content-type header must be set
		$headers = 'From: Qatar Happening' . "\r\n" .
		'Reply-To: admin@donotreply.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion() . "\r\n" .
		'Content-type: text/html; charset=iso-8859-1';
		//Retreive the Wp Admin Email Id
		$sel="select *from wp_users";
		$x=mysql_query($sel);
		while($row=mysql_fetch_array($x))
		{
			$to=$row['user_email'];
		}
		//Save information in database
		$ins="insert into contact_form(name,email,msg)values('$name','$email','$msg')";
		$exe=mysql_query($ins);
		// Additional headers
		$headers .= 'harish.redefinewebs@gmail.com' . "\r\n";
		$headers .= "From:test site";
			if(mail($to,$subject,$message,$headers)){
				echo "Send";
			}else{
				echo "Error";
			}
	
?>