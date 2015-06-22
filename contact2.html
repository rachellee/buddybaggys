<?php
// define variables and set to empty values
$name = $email = $gender = $message = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $subject = test_input($_POST["subject"]);
  $message = test_input($_POST["message"]);
  $gender = test_input($_POST["gender"]);
}

$email_to = "rachellee03@gmail.com";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $subjectErr = "";
$name = $email = $gender = $message = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $message = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }
}
?>

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

			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			Name: <input type="text" name="name" id="title" placeholder="ex. Jane Doe">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>

			E-mail:
			<input type="text" name="email" id="title" placeholder="ex. janedoe@email.com">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>

			Subject:
			<input type="text" name="subject" id="title">
			<span class="error">* <?php echo $subjectErr;?></span>
			<br><br>

			<label>Message: <textarea name="message" rows="5" cols="40" id="message" placeholder="Your message here"></textarea>
			<span class="error">* <?php echo $messageErr;?></span>
			<br><br>

			<input type="submit" name="submit" value="Submit"> 
			</form>
		</div>
		<?php } ?>
	</div>

	<?php include('inc/footer.php'); ?>



