<?php
session_start(); 

$ip=$_SERVER['REMOTE_ADDR'];
$url_name=$_SERVER['HTTP_REFERER'];
// Get the time and date
$date_month = date(m);
$date_year = date(Y);
$date_day = date(d);
$time_hour = date(H);
$time_min = date(i);
// Date
$Date = "$date_day/$date_month/$date_year - $time_hour:$time_min";
$send_to1 = "info@brbhomesbd.com";//"adibatex@gmail.com";
$subject ="Contact Form ". $_REQUEST[company_name];
 
// Headers
$from = $_REQUEST[email];
$headers = "From: $_REQUEST[email]\n"; // From address
$headers .= "Reply-To: $_REQUEST[email]\n"; // Reply-to address
$headers .= "Organization: www.micromaxsoft.com\n"; // Organisation
$headers .= "Content-Type: text/html; charset=iso-8859-1\n"; // Type
$message .= '===================== CONTACT FORM ======================';
$message .= "\n\n"; 
$message .= 'Name : ' .$_REQUEST["name_1"];
$message .= "\n";
$message .= "\n";
$message .= 'Application: ' .$_REQUEST["application"];
$message .= "\n";
$message .= "\n";
$message .= 'Email : ' .$_REQUEST["email_1"];
$message .= "\n";
$message .= "\n";
$message .= 'Position : ' .$_REQUEST["position"];
$message .= "\n";
$message .= "\n";
$message .= 'Validation Code : ' .$_REQUEST["sub_code"];
$message .= "\n";
$message .= "\n";
$message .= "\n";
$message .= 'Query Made On:  ' .$Date ;
$message .= "\n\n";
// Body of the email address
// Put HTML code here

// Send it now!



$filea = $_FILES["filea"]["tmp_name"];
if (!empty($filea))
{

function mail_attachment ($from , $to, $subject, $message, $attachment){
	$fileatt = $attachment; // Path to the file                  
	$fileatt_type = "application/octet-stream"; // File Type 
    $start=	strrpos($attachment, '/') == -1 ? strrpos($attachment, '//') : strrpos($attachment, '/')+1;
	$fileatt_name = substr($attachment, $start, strlen($attachment)); // Filename that will be used for the file as the attachment 
 
	$email_from = $from; // Who the email is from
    $subject = "New Attachment Message";
	$email_subject =  $subject; // The Subject of the email 
	$email_txt = $message; // Message that the email has in it 
 
	$email_to = $to; // Who the email is to
 
	$headers = "From: ".$email_from;
 
	$file = fopen($fileatt,'rb'); 
	$data = fread($file,filesize($fileatt)); 
	fclose($file); 
	$msg_txt="\n\n You have recieved a new attachment message from $from";
	$semi_rand = md5(time()); 
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
	$headers .= "\nMIME-Version: 1.0\n" . 
            "Content-Type: multipart/mixed;\n" . 
            " boundary=\"{$mime_boundary}\""; 
	$email_txt .= $msg_txt;
	$email_message .= "This is a multi-part message in MIME format.\n\n" . 
                "--{$mime_boundary}\n" . 
                "Content-Type:text/html; charset=\"iso-8859-1\"\n" . 
               "Content-Transfer-Encoding: 7bit\n\n" . 
	$email_txt . "\n\n"; 
	$data = chunk_split(base64_encode($data)); 
	$email_message .= "--{$mime_boundary}\n" . 
                  "Content-Type: {$fileatt_type};\n" . 
                  " name=\"{$fileatt_name}\"\n" . 
                  //"Content-Disposition: attachment;\n" . 
                  //" filename=\"{$fileatt_name}\"\n" . 
                  "Content-Transfer-Encoding: base64\n\n" .
                 $data . "\n\n" . 
                  "--{$mime_boundary}--\n";
 
	$ok = mail($email_to, $email_subject, $email_message, $headers);
 
	if($ok)
	{
	echo "File Sent Successfully.";
	unlink($attachment); // delete a file after attachment sent.
	include ("thanks.php");
	}
	else
	{
		echo "Sorry but the email could not be sent. Please go back and try again!"; 
	}
}
 
move_uploaded_file($_FILES["filea"]["tmp_name"],'temp/'.basename($_FILES['filea']['name']));
mail_attachment("$from", $send_to1, $subject, $message, ("temp/".$_FILES["filea"]["name"]));

}
else
{

	if(@mail($send_to1, $subject, $message, $headers))
	{
		include ("thanks.php");
	}
	else
	{
	echo "mail not sent";
	}
}
?>