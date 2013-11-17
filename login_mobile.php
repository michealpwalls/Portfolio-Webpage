<!DOCTYPE html>

<?php
 	/*
	 * login_mobile.php	-	 Portfolio-Webpage
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

<html>
	<head>
		<title>Micheal Walls' Portfolio (Mobile)</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css">
		<link rel="stylesheet" href="css/mobile.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
		<script src="js/mobile.js"></script>
		<script src="js/swipe.js"></script>
		<script src="js/cwd.js"></script>
	</head>
	<body>
	<!-- BEGIN LOGIN -->
		<div data-role="page" id="login">

		<!-- BEGIN LOGIN HEADER -->
			<div data-role="header">
			<img src="img/logo.png" alt="Logo">&nbsp;&nbsp;
			<span id="page-title">Micheal Walls</span>
			<!-- BEGIN LOGIN HEADER NAVIGATION -->
				<div data-role="navbar">
					<ul>
						<li><a href="mobile.php#home" data-role="button" data-transition="fade">Home</a></li>
						<li><a href="mobile.php#about" data-role="button" data-transition="fade">About Me</a></li>
						<li><a href="mobile.php#contact" data-role="button" data-transition="fade">Contact Me</a></li>
					</ul>
					<ul>
						<li><a href="mobile.php#bcontacts" data-role="button" data-transition="fade">Business Contacts</a></li>
					</ul>
				</div>
			<!-- END LOGIN HEADER NAVIGATION -->
			</div>
		<!-- END LOGIN HEADER -->

		<!-- BEGIN LOGIN CONTENT -->
			<div data-role="content">
			<!-- BEGIN LOGIN CONTENT NAVIGATION -->
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li><a href="#projects" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon left" src="img/project-icon.png">Projects</a></li>
						<li><a href="#services" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon right" src="img/services-icon.png">Services</a></li>
					</ul>
				</div>
			<!-- END LOGIN CONTENT NAVIGATION -->
			
			<!-- BEGIN LOGIN CONTENT BLOCK -->
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
						If you're not redirected, just <a href="mobile.php?redirect=bcontacts" title="Business Contacts">click here</a>.
					</div>
<?php
						// Destroy the resultSet
						$object_dbResultSet = null;
						unset( $object_dbResultSet );
						
						// Redirect the user to the Business Contacts
						require_once( "lib/directoryURL.php" );
						header( "Location:" . directoryURL() . "/mobile.php?redirect=bcontacts" );
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
		<!-- BEGIN LOGIN FOOTER -->
			<div data-role="footer">
				<h4>
					&#xa9;20013 Micheal Walls<br>
					&#x3c;<a href="mailto:michealpwalls@gmail.com">michealpwalls@gmail.com</a>&#x3e;<br>
					Or try the <a href="#" onClick="javascript:window.location=cwd+'index.html?nomobile=true';">Desktop version</a> of this site.
				</h4>
			</div>
		<!-- END LOGIN FOOTER -->

		</div>
	<!-- END LOGIN -->

	</body>
</html>
