<!DOCTYPE html>

<?php
 	/*
	 * bcontacts.php	-	 Portfolio-Webpage
	 *
	 * Business Contacts section of the Portfolio
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
		<title>My Personal Portfolio: Business Contacts</title>
		<meta charset="UTF-8">
		<meta name="generator" content="Geany 1.23.1">
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
						<div class="navigationLink" title="Contact Me" OnClick="javascript:window.location='services.html';"><a class="navigationLinkAnchor" href="contact.html">Contact Me</a></div>
						<div class="navigationLinkActive">Business Contacts</div>
					</div>
<!-- End Site Navigation -->
				</nav>
			</div>
		</header>
		<article title="Micheal Walls' Business Contacts">
<!-- Begin Page Content -->
			<div id="contentContainer">
				<header>
					<h1>Business Contacts</h1>
				</header>
				<div class="contentBody">
					<span class="floatRight"><a href="logout.php" title="logout">logout</a></span>
<?php

	// Start a session
	session_start();
	
	/** Check if the user is logged in as an admin. **/
	if( $_SESSION['login-isAdmin'] === true ) {
		// Connect to the database
		require_once( "dbconnect.php" );

		// Make sure we actually connected
		if( !is_null( $object_dbConnection ) ) {
			// Query the DB for the contacts
			$object_dbResultSet = $object_dbConnection->query( "SELECT * FROM bcontacts;" );

			// Close the database connection
			$object_dbConnection = null;
			unset( $object_dbConnection );
			
			if( $object_dbResultSet === 0 || $object_dbResultSet === false ) {
?>
					<h2>Business Contacts</h2>
					<div class="contentBody">
						There are no business contacts in the Database.
					</div>
<?php
			} else {
?>
					<h2>Business Contacts</h2>
					<div class="contentBody">
						<div id="bussinessContacts">
<?php
				// We're ready to iterate through the business contacts!
				while( $array_dbRow = $object_dbResultSet->fetch() ) {
					echo( "							<div class=\"businessContact\">\n" );
					echo( "								<span class=\"businessContactCell\">" . $array_dbRow['id'] . "</span>\n" );
					echo( "								<span class=\"businessContactCell\">" . $array_dbRow['fname'] . "</span>\n" );
					echo( "								<span class=\"businessContactCell\">" . $array_dbRow['lname'] . "</span>\n" );
					echo( "								<span class=\"businessContactCell\">" . $array_dbRow['phone'] . "</span>\n" );
					echo( "								<span class=\"businessContactCell\">" . $array_dbRow['email'] . "</span>\n" );
					echo( "							</div>\n" );
				}// end while loop
?>
						</div>
					</div>
<?php
			}// flow control for DB query. Returns 0 results if there are no contacts or false on DB errors

			// Destroy the resultSet
			$object_dbResultSet = null;
			unset( $object_dbResultSet );
		} else {	// Didn't connect to the DB
			unset( $object_dbConnection );
?>
					<h2>Connection Failure!</h2>
					<div class="contentBody">
						For some reason, there was a problem connecting to the Database. Cannot continue.
					</div>
<?php
		}// flow control to catch DB connection failures.
	} else {
		// If the user is not logged in, show a log-in form
?>
					<h2>Log-in</h2>
					<div class="contentBody">
						Before you can access this section of the page, you must first log-in.<br>
						<form method="POST" action="login.php">
							<fieldset>
								<legend>Please Log-in</legend>
								<label for="login-username">Username</label><br>
								<input name="login-username" type="text" required><span class="input-validation-shim"></span><br><br>
								<label for="login-password">Password</label><br>
								<input name="login-password" type="password" required><span class="input-validation-shim"></span><br><br>
								<input type="submit" value="Send">
							</fieldset>
						</form>
					</div>
<?php
	}// End of Log-in if..else
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