<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['company']) 		||
   empty($_POST['website']) 		||
   empty($_POST['jobtitle']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$company = $_POST['company'];
$website = $_POST['website'];
$jobtitle = $_POST['jobtitle'];
	
// create email body and send it	
$to = 'eran.darki@somoto.net'; // put your email
$email_subject = "Tabatoo Lead";
$email_body = "You have received a new message.\n".
              "Here are the details:\n\n".
              "Name: $name \nEmail: $email_address \nCompany: $company \nCompany Website: $website \nJob Title: $jobtitle";
$headers = "From: $name $email_address\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>