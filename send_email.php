<!DOCTYPE html>

<?php
/*
 * send_email.php
 * 
 * Copyright 2013 Micheal Walls <michealpwalls@gmail.com>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>
<html lang="en">
	<head>
		<title>My Personal Portfolio: eMail Me</title>
		<meta charset="UTF-8">
		<meta name="generator" content="Geany 0.20">
		<link rel="stylesheet" href="css/wide.css" media="screen and (min-width: 674px)">
		<link rel="stylesheet" href="css/narrow.css" media="screen and (max-width: 673px)">
		<link rel="stylesheet" href="css/contactForm.css">
	</head>
	<body>
		<header>
			<div id="headerContainer">
				<img id="logo" title="My Logo" alt="My Logo" src="img/logo.png">
				<nav>
<!-- Begin Site Navigation -->
					<div id="navigationContainer">
						<div class="navigationLink" title="Home" OnClick="javascript:window.location='index.html';"><a class="navigationLinkAnchor" href="index.html" title="Home">Home</a></div>
						<div class="navigationLink" title="About Me" OnClick="javascript:window.location='about.html';"><a class="navigationLinkAnchor" href="about.html">About Me</a></div>
						<div class="navigationLink" title="Resume" OnClick="javascript:window.location='about.html#CV';"><a class="navigationLinkAnchor" href="about.html#CV">R&#x00e9;sum&#x00e9;</a></div>
						<div class="navigationLink" title="Projects" OnClick="javascript:window.location='projects.html';"><a class="navigationLinkAnchor" href="projects.html">Projects</a></div>
						<div class="navigationLink" title="Services" OnClick="javascript:window.location='services.html';"><a class="navigationLinkAnchor" href="services.html">Services</a></div>
						<div class="navigationLink" title="My GitHub" OnClick="javascript:newWindow=window.open('https://github.com/michealpwalls');"><a class="navigationLinkAnchor" href="https://github.com/michealpwalls" target="_blank">GitHub</a></div>
						<div class="navigationLinkActive">Contact Me</div>
						<div class="navigationLink" title="Business Contacts" OnClick="javascript:window.location='bcontacts.php';"><a class="navigationLinkAnchor" href="bcontacts.php">Business Contacts</a></div>
					</div>
<!-- End Site Navigation -->
				</nav>
			</div>
		</header>
		<article title="eMailing Micheal Walls">
			<div id="contentContainer">
				<header>
					<h1>Contacting me by eMail</h1>
				</header>
				<div class="contentBody">

<!-- Begin Page Content -->
		<?php
			//Create a variable to hold the input provided by the user. Use Trim to strip tabs, whitespaces and newlines.
			$emailNameIn = (string) trim( $_POST['email-name'] );
			$emailAddressIn = (string) trim( $_POST['email-address'] );
			$emailMessageIn = (string) trim( $_POST['email-message'] );

			//Declare and initialize a variable to represent the state of validation
			$validation_state = (bool) true;

			//Validate the user input to make sure none of the required fields were missing
			//I can safely use empty(), since I just used trim()
			if( empty( $emailNameIn ) ) {
		?>
					<section title="eMail Submission Failed">
						<header>
							<h2>An Error Occurred</h2>
						</header>
						<div class="contentBody">
							You missed the eMail Name.
						</div>
					</section>
		<?php
				$validation_state = false;
			}

			if( empty( $emailAddressIn ) ) {
		?>
					<section title="eMail Submission Failed">
						<header>
							<h2>An Error Occurred</h2>
						</header>
						<div class="contentBody">
							You missed the eMail Address.
						</div>
					</section>
		<?php
				$validation_state = false;
			}

			if( empty( $emailMessageIn ) ) {
		?>
					<section title="eMail Submission Failed">
						<header>
							<h2>An Error Occurred</h2>
						</header>
						<div class="contentBody">
							You missed the eMail Message.
						</div>
					</section>
		<?php
				$validation_state = false;
			}

			//Best way I can think to validate the email address.
			//If I encode it, the @ symbol will be encoded as well.
			if( filter_var($emailAddressIn, FILTER_VALIDATE_EMAIL) == true ) {
				$emailAddress = (string) $emailAddressIn;
			} else {
				$validation_state = false;
		?>
					<section title="eMail Submission Failed">
						<header>
							<h2>An Error Occurred</h2>
						</header>
						<div class="contentBody">
							Your eMail Address was invalid.
						</div>
					</section>
		<?php
			}
			unset($emailAddressIn);

			//Encode the input from the user before displaying them in the message
			$emailName = (string) htmlentities($emailNameIn);
			unset($emailNameIn);
			$emailMessage = (string) htmlentities($emailMessageIn);
			unset($emailMessage);

			if( $validation_state ) {
				//Deliver the mail to my inbox
				if( !mail('michealpwalls@gmail.com', 'Portfolio Contact Form', "$emailMessage", "From: $emailName <$emailAddress>" . "\r\n", null) ) {
		?>
					<section title="eMail Submission Failed">
						<header>
							<h2>An Error Occurred</h2>
						</header>
						<div class="contentBody">
							The eMail message could not be delivered due to internal server reasons. I'm terribly sorry. Feel free to <a href="mailto:michealpwalls@gmail.com" target="_blank">eMail me</a> manually for the time being.
						</div>
					</section>
		<?php
				} else {
		?>
					<section title="eMail Submission Succeeded">
						<header>
							<h2>eMail Sent!</h2>
						</header>
						<div class="contentBody">
							Congratulations, your eMail has been sent without errors.
						</div>
					</section>
		<?php
				}
			} else {
		?>
					<section title="eMail Submission Failed">
						<header>
							<h2>An Error Occurred</h2>
						</header>
						<div class="contentBody">
							The eMail message could not be delivered due to input validation. One of your inputs was invalid and could not be handled.
						</div>
					</section>
		<?php
			}
		?>

	<!-- Begin Keep-Connected Panel  -->
					<aside title="Connect with me">
						<div class="contentHole">
							<h3>Connect</h3>
							<a class="connectIcon" href="https://github.com/michealpwalls" target="_blank"><img class="connectIcon" src="img/github.png" alt="GitHub" title="Connect with me on GitHub"></a>
							<a class="connectIcon" href="https://twitter.com/michealpwalls" target="_blank"><img class="connectIcon" src="img/twitter-optimized.png" alt="Twitter" title="Connect with me on Twitter"></a>
						</div>
					</aside>
	<!-- End Keep-Connected Panel  -->
				</div>
			</div>
<!-- End Page Content -->
		</article>
		<footer>
<!-- Begin Copyright Notice -->
			<div id="copyrightContainer">
				<p>&copy; 2013 Micheal Walls. All Rights Reserved.</p>
				<p>Penguin Samurai: <a href="http://ubuntuforums.org/" target="_blank">UbuntuForums.org</a></p>
			</div>
<!-- End Copyright Notice -->
		</footer>
	</body>
</html>
