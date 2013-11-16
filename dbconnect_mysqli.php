<!DOCTYPE html>

<?php
 	/*
	 * dbconnect.php	-	 Portfolio-Webpage
	 *
	 * A component of the Login section. Connects to a MySQL database
	 * using the MySQLi functions.
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

	// Connect to the Database
	$object_dbConnection = mysqli_connect( "webdesign4.georgianc.on.ca", "db200250645", 24244, "db200250645" );

	// Set the charset
	mysqli_set_charset( $object_dbConnection, "utf-8" );
?>
