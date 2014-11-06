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
		<div id="contact-content">
			<h1>Contact</h1>

		<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
			<p>Thanks for the email! I&rsquo;ll be in touch shortly.</p>
		<?php } else { ?>
			
			<p>I'd love to hear from you!<BR />Complete the form below to shoot me an email.</p>
		</div>

		<form method="post">
			<table>
				<tr>
					<th>
							<label for="name">Name</label>
					</th>
					<td>
						<input type="text" name="name" id="name" placeholder="ex. Jane Doe">
					</td>
				</tr>
				<tr>
					<th>
							<label for="email">Email</label>
					</th>
					<td>
						<input type="text" name="email" id="email" placeholder="ex. janedoe@email.com">
					</td>
				</tr>
				<tr>
					<th>
							<label for="subject">Subject</label>
					</th>
					<td>
						<input type="text" name="subject" id="subject">
					</td>
				</tr>
				<tr>
					<th>
							<label for="message">Message</label>
					</th>
					<td>
						<textarea name="message" id="message" placeholder="Your message here"></textarea>
					</td>
				</tr>
			</table>
			<input type="submit" value="Submit">
		</form>
	<?php } ?>
</div>

<?php include('inc/footer.php'); ?>