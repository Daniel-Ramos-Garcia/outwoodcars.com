<?php

/* Code by David McKeown - craftedbydavid.com */
/* Editable entries are bellow */
$uname = $_GET['uname'];
$uemail = $_GET['uemail'];
$ucontent = $_GET['ucontent'];

$send_to = "sales@outwoodcars.com";
$send_from = "web@outwoodcars.com";
$send_subject = "Website Enquiry ";



/*Be careful when editing below this line */

$f_name = cleanupentries($uname);
$f_email = cleanupentries($uemail);
$f_message = cleanupentries($ucontent);
$from_ip = $_SERVER['REMOTE_ADDR'];
$from_browser = $_SERVER['HTTP_USER_AGENT'];

function cleanupentries($entry) {
	$entry = trim($entry);
	$entry = stripslashes($entry);
	$entry = htmlspecialchars($entry);

	return $entry;
}
ini_set("sendmail_from", $send_from);

$message = "This email was submitted on " . date('m-d-Y') . 
"\n\nName: " . $f_name . 
"\n\nE-Mail: " . $f_email . 
"\n\nMessage: \n" . $f_message . 
"\n\n\nTechnical Details:\n" . $from_ip . "\n" . $from_browser;

$send_subject .= " - {$f_name}";

$headers = "From: " . $f_email . "\r\n" .
    "Reply-To: " . $f_email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (!$f_email) {
	$myresponse = array('content' => 'no-email' );
	echo json_encode($myresponse);
}else if (!$f_name){
	$myresponse = array('content' => 'no-name' );
	echo json_encode($myresponse);
} elseif (!$f_message) {
	$myresponse = array('content' => 'no-message' );
	echo json_encode($myresponse);
}

else{
	if (filter_var($f_email, FILTER_VALIDATE_EMAIL)) {
		mail($send_to, $send_subject, $message, $headers, "-f".$send_to);
		$myresponse = array('content' => 'true' );
		echo json_encode($myresponse);

	}else{
		$myresponse = array('content' => 'invalid-email' );
		echo json_encode($myresponse);

	}
}

?>