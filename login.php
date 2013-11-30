<!DOCTYPE html>

<?php
 	/*
	 * login.php	-	 portfolio
	 *
	 * Login section of the Portfolio
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
		<title>Micheal Walls' Portfolio: Business Contacts</title>
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
						<div class="navigationLink" title="Business Contacts" OnClick="javascript:window.location='bcontacts.php';"><a class="navigationLinkAnchor" href="bcontacts.php">Business Contacts</a></div>
					</div>
<!-- End Site Navigation -->
				</nav>
			</div>
		</header>
		<article title="How to contact Micheal Walls">
<!-- Begin Page Content -->
			<div id="contentContainer">
				<header>
					<h1>Logging in..</h1>
				</header>
				<div class="contentBody">
<?php
	// Make sure the username and password field were recieved
	if( !isset($_POST['login-username']) || !isset($_POST['login-password']) ) {
?>
					<h2>Missing Username or Password!</h2>
					<div class="contentBody">
						The username, password or both were missing. Cannot continue.
					</div>
<?php
	} else {
		// Trim whitespaces and newlines from the input and store
		$usernameIn = (string) trim( $_POST['login-username'] );
		$passwordIn = (string) trim( $_POST['login-password'] );
		
		// Make sure the username and password fields are not empty after Trim
		if( empty( $usernameIn ) || empty( $passwordIn ) ) {
?>
					<h2>Empty Username or Password!</h2>
					<div class="contentBody">
						The username, password or both were empty. Maybe you tried to use a single space
					</div>
<?php
		} else {
			// hash the password using sha-512
			$password = (string) openssl_digest($passwordIn, "sha512");
			unset( $passwordIn );

			// Connect to the database
			require_once( "dbconnect.php" );

			// Make sure we actually connected
			if ( !is_null($object_dbConnection) ) {
				// quote and escape dangerous characters
				$username = (string) $object_dbConnection->quote( $usernameIn );
				unset( $usernameIn );

				// Query the database
				$object_dbResultSet = $object_dbConnection->query( "SELECT * FROM admins_strong WHERE username=$username AND password='$password';" );

				// Close the database connection
				$object_dbConnection = null;
				unset( $object_dbConnection );

				// Test that we actually have a PDOStatement object
				if( is_bool($object_dbResultSet) ) {
?>
					<h2>Query Failure!</h2>
					<div class="contentBody">
						The query did not execute properly! Cannot continue.
					</div>
<?php
				} else {
					// Test that we actually retrieved something (PDO is cray cray!)
					$array_dbResultSet = $object_dbResultSet->fetch();
					if( empty($array_dbResultSet[0]) ) {
?>
					<h2>Login Failed!</h2>
					<div class="contentBody">
						A matching user and password could not be found in the database! You either typed your details wrong, or you do not have a user account.<br>
						<a href="javascript:history.back(1);" title="Go back">Go back</a> and try again.
					</div>
<?php
					} else {
						// Start the session
						session_start();

						// We found a user, so lets store their user info in the session
						$_SESSION['login-userID'] = (int) $array_dbResultSet[0];
						$_SESSION['login-userName'] = (string) $array_dbResultSet[2];

						// Just assume they're an admin :P
						$_SESSION['login-isAdmin'] = (bool) true;
?>
					<h2>Login Succeeded!</h2>
					<div class="contentBody">
						A matching user and password was found in the database! You should be redirected to the Business Contacts.<br>
						If you're not redirected, just <a href="bcontacts.php" title="Business Contacts">click here</a>.
					</div>
<?php
						// Destroy the resultSet
						$object_dbResultSet = null;
						unset( $object_dbResultSet );
						
						// Redirect the user to the Business Contacts
						require_once( "lib/directoryURL.php" );
						header( "Location:" . directoryURL() . "/bcontacts.php" );
					}// flow control for non-existent user or bad password

				}// flow control for Database query
				
				// Destroy the resultSet
				$object_dbResultSet = null;
				unset( $object_dbResultSet );
			} else {
				unset( $object_dbConnection );
?>
					<h2>Connection Failure!</h2>
					<div class="contentBody">
						For some reason, there was a problem connecting to the Database. Cannot continue.
					</div>
<?php
			}// flow control to catch DB connection failures.

		}// flow control for empty username and password

	}// flow control to catch unset username and password
	 
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
