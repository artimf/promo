<?php
$to="shop@theme4u.ru";
/*Your Email*/
$subject="Suscription from the website";
/*Issue*/
$date=date("l, F jS, Y");
$time=date("h:i A");
$email=$_REQUEST['email'];
$name=$_REQUEST['name'];

$msg="
	
	Suscription request from website on date  $date, hour: $time.\n
	
	
	name: $name\n
	Email: $email\n
	
	";
if($email=="") {
echo "<div class='alert alert-danger'>
		  <a class='close' data-dismiss='alert'>Г—</a>
		  <strong>Warning!</strong> Please fill all the fields.
	  </div>";
} else {

mail($to,$subject,$msg.';'.$email,"From:".$to);
echo "<div class='alert alert-success'>
		  <a class='close' data-dismiss='alert'>Г—</a>
		  <strong>Thank you for your message!</strong>
	  </div>";
}
?>