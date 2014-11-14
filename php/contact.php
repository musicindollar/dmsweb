<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

// echo "this is a msg<br>";
// echo $_POST ['inputEmail'] . "<br>";
// echo print_r( $_POST );
// echo "<br>";

if( isset( $_POST ['inputEmail'] ) ) {
	$email_to = "test@morvern.force9.net";
	$email_subject = "DMS Contact form";


	function died($error) {
		echo "Error:<br>";
		echo $error . "<br>";
		echo "Please fix and resubmit.<br><br>";
		echo '<a href="/contact.html">Click to continue</a>';
		die ();
	}
	
	if ( ! (isset( $_POST ['inputEmail'] ) && isset( $_POST ['inputPhone'] ) && isset( $_POST ['textareaMsg'] )) ) {
		died( 'Error on form' );
	}
	
	$i_email = $_POST["inputEmail"];
	$i_phone = $_POST["inputPhone"];
	$i_msg = $_POST["textareaMsg"];

// 	echo "i_email: " . $i_email . "<br>";
// 	echo "i_phone: " . $i_phone . "<br>";
// 	echo "i_msg: " . $i_msg . "<br>";

	$error_message = "";
	
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
    // check email address pattern
	if (! preg_match( $email_exp, $i_email )) {
		$error_message .= 'The email address you entered does not appear to be valid.<br>';
	}
	
    // check that a message was entered
	if (strlen ( $i_msg ) < 2) {
		$error_message .= 'No message entered.<br>';
	}
	
	if (strlen ( $error_message ) > 0) {
		died ( $error_message );
	}

	function clean_string($string) {
		$bad = array (
				"content-type",
				"bcc:",
				"to:",
				"cc:",
				"href",
				"\r\n"
		);
		
		return str_replace ( $bad, "", $string );
	}

	$email_message = "The contact form details are:\n\n";
	$email_message .= "Email: " . clean_string ( $i_email ) . "\n";
	$email_message .= "Phone: " . clean_string ( $i_phone ) . "\n";
	$email_message .= "Message: " . clean_string ( $i_msg ) . "\n";
	
	// create email headers
	$headers = 'From: ' . $i_email . "\r\n" . 'Reply-To: ' . $i_email . "\r\n" . 'X-Mailer: PHP/' . phpversion ();

//     echo $email_message;
//     echo "<br>";

	$mailstatus = mail ( $email_to, $email_subject, $email_message, $headers );
    
//     echo "mail status [" . $mailstatus . "]<br>";
?>

<p>Thanks for sending us a message</p>
<p>We will respond as soon as possible</p>
<a href="/index.html">Click to continue</a>

<?php
}

?>
