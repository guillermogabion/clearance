<?php
	include('conn.php');
	require __DIR__ . '\twilio-php-main\twilio-php-main\src\Twilio\autoload.php';
	use Twilio\Rest\Client;

	$id=$_GET['id'];
 
	$sid = 'AC632ca7556128a88237c53d442aba9141';
	$token = '188976b3e040ca94a3c50793b01c605f';
	$client = new Client($sid, $token);	
	$inform=$_POST['inform'];
	$lastname=$_POST['lastname'];
	$reqstatus=$_POST['reqstatus'];
	$mobile=$_POST['mobile'];


 
	mysqli_query($conn,"update `student` set inform='$inform', lastname='$lastname', reqstatus='$reqstatus' where id='$id'");
	$client->messages->create(
		// the number you'd like to send the message to
		$mobile,
		[
			// A Twilio phone number you purchased at twilio.com/console
			'from' => '+18433965752',
			// the body of the text message you'd like to send
			'body' => "Your Request Has been $reqstatus - From TMCF Executive"
		]
	);
	
	header('location:index.php');
?>