<!DOCTYPE html>

<!--
   mobile.php	-	Portfolio-Webpage for Mobiles

   Copyright 2013 Micheal Walls <michealpwalls@gmail.com>

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
   MA 02110-1301, USA.
-->

<html>
	<head>
		<title>Micheal Walls' Portfolio (Mobile)</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
		<link rel="stylesheet" href="css/mobile.css">
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
		<script src="js/mobile.js"></script>
		<script src="js/swipe.js"></script>
		<script src="js/cwd.js"></script>
<?php

	// begin the session
	session_start();

?>
	</head>
	<body>

	<!-- BEGIN HOMEPAGE -->
		<div data-role="page" id="home">

		<!-- BEGIN HOMEPAGE HEADER -->
			<div data-role="header">
			<img src="img/logo.png" alt="Logo">&nbsp;&nbsp;
			<span id="page-title">Micheal Walls</span>
			<!-- BEGIN HOMEPAGE HEADER NAVIGATION -->
				<div data-role="navbar">
					<ul>
						<li><a href="#home" data-role="button" data-transition="fade">Home</a></li>
						<li><a href="#about" data-role="button" data-transition="fade">About Me</a></li>
						<li><a href="#contact" data-role="button" data-transition="fade">Contact Me</a></li>
					</ul>
					<ul>
						<li><a href="#bcontacts" data-role="button" data-transition="fade">Business Contacts</a></li>
					</ul>
				</div>
			<!-- END HOMEPAGE HEADER NAVIGATION -->
			</div>
		<!-- END HOMEPAGE HEADER -->

		<!-- BEGIN HOMEPAGE CONTENT -->
			<div data-role="content">
			<!-- BEGIN HOMEPAGE CONTENT NAVIGATION -->
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li><a href="#projects" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon left" src="img/project-icon.png">Projects</a></li>
						<li><a href="#services" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon right" src="img/services-icon.png">Services</a></li>
					</ul>
				</div>
			<!-- END HOMEPAGE CONTENT NAVIGATION -->
			
			<!-- BEGIN HOMEPAGE CONTENT BLOCK -->
				<section>
					<header>
					<h1>Micheal Walls</h1><br>
					<h2>The Linux Ninja!</h2>
				</header>
				<div class="contentBody">
					Welcome to my personal Portfolio! Here you will be able to learn more <a href="#about" title="About Me">about me</a> and <a href="#contact" title="Contact Me">stay connected</a> with me.<br>
					<p>Be sure to check out the <a href="#services" title="Services">Services</a> I currently offer, or <em>slide</em> through my <a href="#projects" title="Projects">Projects</a>:</p>
					
		<!-- DO THE PHOTO-SLIDER HERE WITH SWIPE CAPABILITIES -->
			<!-- USING swipe.js by Brad Birdsall -->
					<div id='slider' class='swipe'>
						<div class='swipe-wrap'>
							<div><a href="https://github.com/michealpwalls/bedtime-teddybear" target="_blank"><img class="projectImage" src="img/project-teddybear.png" alt="Project: Bedtime Teddybear (Arduino)"></a></div>
							<div><a href="https://github.com/michealpwalls/Portfolio-Webpage" target="_blank"><img class="projectImage" src="img/project-portfolio.png" alt="Project: Portfolio Webpage (HTML5)"></a></div>
							<div><a href="https://github.com/michealpwalls/PHP-CMS" target="_blank"><img class="projectImage" src="img/project-cms.jpg" alt="Project: Content Management System (PHP, MySQL)"></a></div>
						</div>
						<p><a href="javascript:mySwipe.prev();"><img class="slideArrows" src="img/arrow-left.png" alt="Previous Image" title="Previous Image"></a><a href="javascript:mySwipe.next();"><img class="slideArrows" src="img/arrow-right.png" alt="Next Image" title="Next Image"></a></p>
					</div>
				</section>
		<!-- END PHOTO-SLIDER -->
			<!-- END HOMEPAGE CONTENT BLOCK -->
			</div>
		<!-- END HOMEPAGE CONTENT -->

		<!-- BEGIN HOMEPAGE FOOTER -->
			<div data-role="footer">
				<h4>
					&#xa9;20013 Micheal Walls<br>
					&#x3c;<a href="mailto:michealpwalls@gmail.com">michealpwalls@gmail.com</a>&#x3e;<br>
					Or try the <a href="#" onClick="javascript:window.location=cwd+'index.html?nomobile=true';">Desktop version</a> of this site.
				</h4>
			</div>
		<!-- END HOMEPAGE FOOTER -->

		</div>
	<!-- END HOMEPAGE -->

	<!-- BEGIN ABOUT ME -->
		<div data-role="page" id="about">

		<!-- BEGIN ABOUT ME HEADER -->
			<div data-role="header">
			<img src="img/logo.png" alt="Logo">&nbsp;&nbsp;
			<span id="page-title">About Me</span>
			<!-- BEGIN ABOUT ME HEADER NAVIGATION -->
				<div data-role="navbar">
					<ul>
						<li><a href="#home" data-role="button" data-transition="fade">Home</a></li>
						<li><a href="#about" data-role="button" data-transition="fade">About Me</a></li>
						<li><a href="#contact" data-role="button" data-transition="fade">Contact Me</a></li>
					</ul>
					<ul>
						<li><a href="#bcontacts" data-role="button" data-transition="fade">Business Contacts</a></li>
					</ul>
				</div>
			<!-- END ABOUT ME HEADER NAVIGATION -->
			</div>
		<!-- END ABOUT ME HEADER -->

		<!-- BEGIN ABOUT ME CONTENT -->
			<div data-role="content">
			<!-- BEGIN ABOUT ME CONTENT NAVIGATION -->
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li><a href="#projects" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon left" src="img/project-icon.png">Projects</a></li>
						<li><a href="#services" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon right" src="img/services-icon.png">Services</a></li>
					</ul>
				</div>
			<!-- END ABOUT ME CONTENT NAVIGATION -->
			
			<!-- BEGIN ABOUT ME CONTENT BLOCK -->
				<section title="Micheal Walls' Bio">
					<header>
						<h2>Current Bio</h2>
					</header>
					<div class="contentBodySubsection">
						My name is Micheal Walls and I am a self-taught Web Developer and Computer Programmer.<br>
						I am currently attending Georgian College's Computer Programmer/Systems Analyst program in Barrie, Ontario<br>
						I have had a interest in Computer Technology from a young age. I have a real passion for Linux, having used various distributions of Linux since 2006.
					</div>
				</section>
				<section title="Micheal Walls' CV">
					<header>
						<h2 id="CV">Curriculum Vitae</h2>
					</header>
					<div class="contentBodySubsection">
						<section>
							<em>Micheal Walls</em><br>
							Barrie, Ontario, Canada<br>
							Phone: (705) 252-2140<br>
							eMail: <a href="mailto:michealpwalls@gmail.com" title="Micheal Walls' Email Address">michealpwalls@gmail.com</a><br><br>
						</section>
						<section>
							<h3>Career Objectives</h3>
							<div class="contentBodySubsection">
								To further my career in as a Computer Programmer.
							</div>
						</section>
						<section>
							<h3>Professional Experience</h3>
							<div class="contentBodySubsection">
								Unfortunately, I have yet to obtain any professional experience as an IT Professional. However, I am very eager for an opportunity!
							</div>
						</section>
						<section>
							<h3>Educational Qualifications</h3>
							<div class="contentBodySubsection">
								2013-Ongoing: Advanced Diploma in Computer Programming/Systems Analysis, Georgian College.<br>
								2010-2012: Secondary School Diploma, The Learning Centre, Barrie Campus.
							</div>
						</section>
						<section>
							<h3>Hobbies</h3>
							<div class="contentBodySubsection">
								Reading<br>
								Studying and experimenting with different Operating Systems<br>
								Playing strategy games<br>
							</div>
						</section>
						<section>
							<h3>References</h3>
							<div class="contentBodySubsection"></div>
						</section>
					</div>
				</section>
			<!-- END ABOUT ME CONTENT BLOCK -->
			</div>
		<!-- END ABOUT ME CONTENT -->

		<!-- BEGIN ABOUT ME FOOTER -->
			<div data-role="footer">
				<h4>
					&#xa9;20013 Micheal Walls<br>
					&#x3c;<a href="mailto:michealpwalls@gmail.com">michealpwalls@gmail.com</a>&#x3e;<br>
					Or try the <a href="#" onClick="javascript:window.location=cwd+'index.html?nomobile=true';">Desktop version</a> of this site.
				</h4>
			</div>
		<!-- END ABOUT ME FOOTER -->

		</div>
	<!-- END ABOUT ME -->

	<!-- BEGIN CONTACT ME -->
		<div data-role="page" id="contact">

		<!-- BEGIN CONTACT ME HEADER -->
			<div data-role="header">
			<img src="img/logo.png" alt="Logo">&nbsp;&nbsp;
			<span id="page-title">Contact Me</span>
			<!-- BEGIN CONTACT ME HEADER NAVIGATION -->
				<div data-role="navbar">
					<ul>
						<li><a href="#home" data-role="button" data-transition="fade">Home</a></li>
						<li><a href="#about" data-role="button" data-transition="fade">About Me</a></li>
						<li><a href="#contact" data-role="button" data-transition="fade">Contact Me</a></li>
					</ul>
					<ul>
						<li><a href="#bcontacts" data-role="button" data-transition="fade">Business Contacts</a></li>
					</ul>
				</div>
			<!-- END CONTACT ME HEADER NAVIGATION -->
			</div>
		<!-- END CONTACT ME HEADER -->

		<!-- BEGIN CONTACT ME CONTENT -->
			<div data-role="content">
			<!-- BEGIN CONTACT ME CONTENT NAVIGATION -->
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li><a href="#projects" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon left" src="img/project-icon.png">Projects</a></li>
						<li><a href="#services" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon right" src="img/services-icon.png">Services</a></li>
					</ul>
				</div>
			<!-- END CONTACT ME CONTENT NAVIGATION -->
			
			<!-- BEGIN CONTACT ME CONTENT BLOCK -->
				<section title="Contact Micheal Walls">
					<header>
						<h1>Contact Me</h1>
					</header>
					<div class="contentBody">
						<h2>Manually Contact Me</h2>
						<div class="contentBody">
							Micheal Walls &#60;<a href="mailto:michealpwalls@gmail.com" target="_blank" title="Contact me by Mail">michealpwalls@gmail.com</a>&#62;<br>
							Barrie, Ontario, Canada<br>
							&#40;705&#41; 252-2140
						</div>
						<h2>Contact Me Online</h2>
						<div class="contentBody">
					<!-- Begin Contact Form -->
							<form method="POST" action="send_email.php">
								<label for="email-name">Your Name</label><br>
								<input name="email-name" type="text" required><br>
								<label for="email-address">Your eMail Address</label><br>
								<input name="email-address" type="email" required><br>
								<label for="email-message">Your Message</label><br>
								<textarea name="email-message" rows="6" cols="50" required></textarea><br>
								<input type="submit" value="Send">
							</form>
					<!-- End Contact Form -->
							<p>Alternatively, you can always connect with me online using the following Social Networks:<br></p>
							<ul>
								<li><a href="https://twitter.com/michealpwalls" target="_blank">Twitter</a></li>
								<li><a href="https://github.com/michealpwalls" target="_blank">GitHub</a></li>
							</ul>
						</div>
					</section>
			<!-- END CONTACT ME CONTENT BLOCK -->
			</div>
		<!-- END CONTACT ME CONTENT -->

		<!-- BEGIN CONTACT ME FOOTER -->
			<div data-role="footer">
				<h4>
					&#xa9;20013 Micheal Walls<br>
					&#x3c;<a href="mailto:michealpwalls@gmail.com">michealpwalls@gmail.com</a>&#x3e;<br>
					Or try the <a href="#" onClick="javascript:window.location=cwd+'index.html?nomobile=true';">Desktop version</a> of this site.
				</h4>
			</div>
		<!-- END CONTACT ME FOOTER -->

		</div>
	<!-- END CONTACT ME -->
	
	<!-- BEGIN PROJECTS -->
		<div data-role="page" id="projects">

		<!-- BEGIN PROJECTS HEADER -->
			<div data-role="header">
			<img src="img/logo.png" alt="Logo">&nbsp;&nbsp;
			<span id="page-title">Projects</span>
			<!-- BEGIN PROJECTS HEADER NAVIGATION -->
				<div data-role="navbar">
					<ul>
						<li><a href="#home" data-role="button" data-transition="fade">Home</a></li>
						<li><a href="#about" data-role="button" data-transition="fade">About Me</a></li>
						<li><a href="#contact" data-role="button" data-transition="fade">Contact Me</a></li>
					</ul>
					<ul>
						<li><a href="#bcontacts" data-role="button" data-transition="fade">Business Contacts</a></li>
					</ul>
				</div>
			<!-- END PROJECTS HEADER NAVIGATION -->
			</div>
		<!-- END PROJECTS HEADER -->

		<!-- BEGIN PROJECTS CONTENT -->
			<div data-role="content">
			<!-- BEGIN PROJECTS CONTENT NAVIGATION -->
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li><a href="#projects" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon left" src="img/project-icon.png">Projects</a></li>
						<li><a href="#services" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon right" src="img/services-icon.png">Services</a></li>
					</ul>
				</div>
			<!-- END PROJECTS CONTENT NAVIGATION -->
			
			<!-- BEGIN PROJECTS CONTENT BLOCK -->
				<div data-role="collapsible-set">
					<div data-role="collapsible" data-collapsed="true">
						<h3>Bedtime Teddybear</h3>
						<p>
							<a href="https://github.com/michealpwalls/bedtime-teddybear" target="_blank"><img class="projectImage" alt="Bedtime Teddybear project" title="Bedtime Teddybear project" src="img/project-teddybear.png"></a>
							This project was started during my first semester at Georgian College. I used an Arduino, a Wave shield and an old stuffed animal ("Teddy Bear") to create the "<a href="https://github.com/michealpwalls/bedtime-teddybear" target="_Blank">Bedtime Teddy Bear</a>" that can sing to your child at night.
						</p>
					</div>
					<div data-role="collapsible" data-collapsed="true">
						<h3>Personal Portfolio Webpage</h3>
						<p>
							<a href="https://github.com/michealpwalls/Portfolio-Webpage" target="_blank"><img class="projectImage" alt="Portfolio Webpage project" title="Portfolio Webpage project" src="img/project-portfolio.png"></a>
							The page you are on right now is a live implementation of my Portfolio project. You can find the project on <a href="https://github.com/michealpwalls/Portfolio-Webpage" target="_blank">GitHub</a>. It's different because it's built using <em>Semantic</em> HTML5 markup and is constructed to be very <em>Mobile-Friendly</em>.
						</p>
					</div>
					<div data-role="collapsible" data-collapsed="true">
						<h3>Content Management System</h3>
						<p>
							<a href="https://github.com/michealpwalls/PHP-CMS" target="_blank"><img class="projectImage" alt="Content Management System project" title="Content Management System project" src="img/project-cms.jpg"></a>
							A simple and lightweight Content Management System. Using PHP and MySQL, I created a lightweight, Database-driven Content Mangement System during my Web Programming class. I paid particularly close attention to Input Validation.
						</p>
					</div>
				</div>
			<!-- END PROJECTS CONTENT BLOCK -->
			</div>
		<!-- END PROJECTS CONTENT -->

		<!-- BEGIN PROJECTS FOOTER -->
			<div data-role="footer">
				<h4>
					&#xa9;20013 Micheal Walls<br>
					&#x3c;<a href="mailto:michealpwalls@gmail.com">michealpwalls@gmail.com</a>&#x3e;<br>
					Or try the <a href="#" onClick="javascript:window.location=cwd+'index.html?nomobile=true';">Desktop version</a> of this site.
				</h4>
			</div>
		<!-- END PROJECTS FOOTER -->

		</div>
	<!-- END PROJECTS -->
	
	<!-- BEGIN SERVICES -->
		<div data-role="page" id="services">

		<!-- BEGIN SERVICES HEADER -->
			<div data-role="header">
			<img src="img/logo.png" alt="Logo">&nbsp;&nbsp;
			<span id="page-title">Services</span>
			<!-- BEGIN SERVICES HEADER NAVIGATION -->
				<div data-role="navbar">
					<ul>
						<li><a href="#home" data-role="button" data-transition="fade">Home</a></li>
						<li><a href="#about" data-role="button" data-transition="fade">About Me</a></li>
						<li><a href="#contact" data-role="button" data-transition="fade">Contact Me</a></li>
					</ul>
					<ul>
						<li><a href="#bcontacts" data-role="button" data-transition="fade">Business Contacts</a></li>
					</ul>
				</div>
			<!-- END SERVICES HEADER NAVIGATION -->
			</div>
		<!-- END SERVICES HEADER -->

		<!-- BEGIN SERVICES CONTENT -->
			<div data-role="content">
			<!-- BEGIN SERVICES CONTENT NAVIGATION -->
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li><a href="#projects" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon left" src="img/project-icon.png">Projects</a></li>
						<li><a href="#services" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon right" src="img/services-icon.png">Services</a></li>
					</ul>
				</div>
			<!-- END SERVICES CONTENT NAVIGATION -->
			
			<!-- BEGIN SERVICES CONTENT BLOCK -->
				<section title="Micheal Walls' Services">
					<header>
						<h1>Services</h1>
					</header>
					<div class="contentBody">
						<em>Computer Programming</em>
						<ul>
							<li>Linux installers (Autoconf and Automake)</li>
							<li>ANSI C</li>
							<li>Java</li>
							<li>Visual C#</li>
						</ul>
						<em>Front-End Web Development</em>
						<ul>
							<li>HTML5</li>
							<li>CSS3</li>
							<li>ECMAScript / JavaScript / JScript</li>
						</ul>
						<em>Back-End Web Development</em>
						<ul>
							<li>Common Gateway Interface</li>
							<li class="subItem">PERL</li>
							<li>Active Server Pages</li>
							<li class="subItem">VBScript</li>
							<li class="subItem">JScrip</li>
							<li>PHP v4 v5</li>
							<li>ASP.NET</li>
							<li class="subItem">Visual C#</li>
						</ul>
						<em>Technical Support</em>
						<ul>
							<li>Linux</li>
							<li class="subItem">Gentoo</li>
							<li class="subItem">Debian</li>
							<li class="subSubItem">Ubuntu</li>
							<li class="subSubItem">Mint</li>
							<li class="subItem">RedHat Enterprise Linux</li>
							<li class="subSubItem">Fedora</li>
							<li class="subSubItem">CentOS</li>
							<li>Windows NT</li>
							<li class="subItem">Windows 2000</li>
							<li class="subItem">Windows XP</li>
							<li class="subItem">Windows Vista</li>
							<li class="subItem">Windows 7</li>
						</ul>
					</div>
				</section>
			<!-- END SERVICES CONTENT BLOCK -->
			</div>
		<!-- END SERVICES CONTENT -->

		<!-- BEGIN SERVICES FOOTER -->
			<div data-role="footer">
				<h4>
					&#xa9;20013 Micheal Walls<br>
					&#x3c;<a href="mailto:michealpwalls@gmail.com">michealpwalls@gmail.com</a>&#x3e;<br>
					Or try the <a href="#" onClick="javascript:window.location=cwd+'index.html?nomobile=true';">Desktop version</a> of this site.
				</h4>
			</div>
		<!-- END SERVICES FOOTER -->

		</div>
	<!-- END SERVICES -->

	<!-- BEGIN BUSINESS CONTACTS -->
<!--
	Since this is somewhat of a "dynamic" page in that, if the user is logged in
	we show the Contacts and if not, we show a login form, I disable the use of
	caching with the data-cache="false" attribute on the page's div element.
	
	This solves the SESSION bugs (Requiring users to manually refresh after
	having successfully logged in, in order to see the Contacts).
-->
		<div data-role="page" id="bcontacts" data-cache="never">

		<!-- BEGIN BUSINESS CONTACTS HEADER -->
			<div data-role="header">
			<img src="img/logo.png" alt="Logo">&nbsp;&nbsp;
			<span id="page-title">Micheal Walls</span>
			<!-- BEGIN BUSINESS CONTACTS HEADER NAVIGATION -->
				<div data-role="navbar">
					<ul>
						<li><a href="#home" data-role="button" data-transition="fade">Home</a></li>
						<li><a href="#about" data-role="button" data-transition="fade">About Me</a></li>
						<li><a href="#contact" data-role="button" data-transition="fade">Contact Me</a></li>
					</ul>
					<ul>
						<li><a href="#bcontacts" data-role="button" data-transition="fade">Business Contacts</a></li>
					</ul>
				</div>
			<!-- END BUSINESS CONTACTS HEADER NAVIGATION -->
			</div>
		<!-- END BUSINESS CONTACTS HEADER -->

		<!-- BEGIN BUSINESS CONTACTS CONTENT -->
			<div data-role="content">
			<!-- BEGIN HOMEPAGE CONTENT NAVIGATION -->
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li><a href="#projects" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon left" src="img/project-icon.png">Projects</a></li>
						<li><a href="#services" data-transition="fade" data-theme="" data-icon=""><img class="buttonIcon right" src="img/services-icon.png">Services</a></li>
					</ul>
				</div>
			<!-- END BUSINESS CONTACTS CONTENT NAVIGATION -->
			
			<!-- BEGIN BUSINESS CONTACTS CONTENT BLOCK -->
<?php
	/** Check if the user is logged in as an admin. **/
	if( $_SESSION['login-isAdmin'] === true ) {
		// Connect to the database
		require_once( "dbconnect.php" );

		// Make sure we actually connected
		if( !is_null( $object_dbConnection ) ) {
			// Query the DB for the contacts
			$object_dbResultSet = $object_dbConnection->query( "SELECT * FROM bcontacts ORDER BY fname;" );

			// Close the database connection
			$object_dbConnection = null;
			unset( $object_dbConnection );
?>
<!--
	The use of the rel="external" attribute on anchor elements prevents JQuery Mobile
	from loading the resource into this current document (Or something, LOL)
	
	This solves the bug that 'caused the logout process to complete break the App's state/mode
-->
					<span class="floatRight"><a href="logout_mobile.php" title="logout" rel="external">logout</a></span>
					<p>
						Welcome, <?php echo( $_SESSION['login-userName'] ); ?>! Here are my <strong>private</strong> Business Contacts:
					</p>
<?php
			// Make sure we have an object to work with
			if( is_bool($object_dbResultSet) ) {
?>
					<h2>Query Failure!</h2>
					<div class="contentBody">
						The query did not execute properly! Cannot continue.
					</div>
<?php
			} else {
?>
					<h2>Business Contacts</h2>
					<div class="contentBody">
						<div id="businessContacts">
<?php
				// We're ready to iterate through the business contacts!
				while( $array_dbRow = $object_dbResultSet->fetch() ) {
?>
							<h4><?=$array_dbRow['fname'];?> <?=$array_dbRow['lname'];?></h4>
							<div class="businessContact" title="<?=$array_dbRow['fname'];?> <?=$array_dbRow['lname'];?>">
								&nbsp;&nbsp;Phone: <a href="tel:<?=$array_dbRow['phone'];?>" title="Telephone Number"><?=$array_dbRow['phone'];?></a></span><br>
								&nbsp;&nbsp;eMail: <a href="mailto:<?=$array_dbRow['email'];?>" title="Electronic Mail Address"><?=$array_dbRow['email'];?></a>
							</div>
							
							<script> $( ".businessContact" ).dialog({ autoOpen: false }); </script>
<?php
				}// end while loop
?>
						</div>
					</div>
<?php
			}// flow control for DB query

			// Destroy the resultSet object
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
						<!--
							I use the data-ajax="false" attribute on the form element to disable JQuery Mobile's
							use of AJAX.
							
							This fixes the bug that caused the App's state/mode to become unstable and "glitchy"
						-->
						<form method="POST" action="login_mobile.php" data-ajax="false">
							<fieldset>
								<legend>Please Log-in</legend>
								<label for="login-username">Username</label><br>
								<input name="login-username" type="text" required><span id="input-validation-shim1"></span><br><br>
								<label for="login-password">Password</label><br>
								<input name="login-password" type="password" required><span id="input-validation-shim2"></span><br><br>
								<input type="submit" value="Send">
							</fieldset>
						</form>
					</div>
<?php
	}// End of Log-in if..else
?>

			<!-- END BUSINESS CONTACTS CONTENT BLOCK -->
			</div>
		<!-- END BUSINESS CONTACTS CONTENT -->

		<!-- BEGIN BUSINESS CONTACTS FOOTER -->
			<div data-role="footer">
				<h4>
					&#xa9;20013 Micheal Walls<br>
					&#x3c;<a href="mailto:michealpwalls@gmail.com">michealpwalls@gmail.com</a>&#x3e;<br>
					Or try the <a href="#" onClick="javascript:window.location=cwd+'index.html?nomobile=true';">Desktop version</a> of this site.
				</h4>
			</div>
		<!-- END BUSINESS CONTACTS FOOTER -->

		</div>
	<!-- END BUSINESS CONTACTS -->

	</body>
</html>
