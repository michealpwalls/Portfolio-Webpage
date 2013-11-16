<?php
/*
 *      logout.php
 *      
 *      Copyright 2013 Micheal Walls <michealpwalls@gmail.com>
 *      
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *      
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *      
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 *      
 *      
 */

// Register the session
session_start();

// Overwrite the global session array
$_SESSION = (array) Array();

// Check to see if PHP is using cookie-based sessions (Probably)
if( ini_get("session.use_cookies") ) {
	// Get the current set of cookie options
    $array_cookieOptions = (array) session_get_cookie_params();

	// Overwrite the session cookie with no data
    setcookie(
		session_name(),
		'',
		time() - 42000,
        $array_cookieOptions["path"],
        $array_cookieOptions["domain"],
        $array_cookieOptions["secure"],
        $array_cookieOptions["httponly"]
    );
}

// Unregister the session
session_destroy();

header( "Location:" . $_SERVER['HTTP_REFERER'] );
?>
