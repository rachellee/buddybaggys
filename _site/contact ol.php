<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$email_body = "";

	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body .  "Email: " . $email . "\n";
	$email_body = $email_body .  "Subject: " . $subject . "\n";
	$email_body = $email_body .  "Message: " . $message;

	// TODO: send email

	header("Location: contact.php?status=thanks");
	exit;
} ?>

<?php
$pageTitle = "Contact Buddy's Baggys";
$section = "contact";
include('inc/header.php'); ?>

	<div id ="contact">

		<h1>Contact</h1>

		<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
			<p>Thanks for the email! I&rsquo;ll be in touch shortly.</p>
		<?php } else { ?>
			
			<p>I'd love to hear from you!<BR>Complete the form below to shoot me an email.</p>

		<fieldset>
		  <legend>Delivery Details</legend>
		  <ol>
		  	<li>
		      <label for="name">Name<em>*</em></label>
		      <input id="name" />
		    </li>
		  	<li>
		      <label for="email">Email<em>*</em></label>
		      <input id="email" />
		    </li>
		  	<li>
		      <label for="subject">Subject</label>
		      <input id="subject" />
		    </li>
		  	<li>
		      <label for="county">County<em>*</em></label>
		      <input id="county" />
		    </li>
		  	<li>
		      <label for="postcode">Postcode<em>*</em></label>
		      <input id="postcode" />
		    </li>
		  	<li>
		      <fieldset>
		        <legend>Is this address also your invoice » address?<em>*</em></legend>
		        <label><input type="radio" »
		name="invoice-address" /> Yes</label>
		        <label><input type="radio" »
		name="invoice-address" /> No</label>
		      </fieldset>
		    </li>
		  </ol>
		</fieldset>
	<?php } ?>
</div>

<?php include('inc/footer.php'); ?>