<!DOCTYPE html>

<?php
 	/*
	 * dbconnect.php	-	 portfolio
	 *
	 * A component of the Login section. Connects to a MySQL database
	 * using the PHP Data Objects class.
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
	 
	// Array of options to be passed through the PDO constructor.
	$array_dbOptions = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");

	try {
		// Connect to the Database
		$object_dbConnection = new PDO( "mysql:webdesign4.georgianc.on.ca;dbname=db200250645", "db200250645", 24244 );

		// Sometimes, older implementations of PDO do not honor options passed through the Constructor.
		$object_dbConnection->exec( "SET NAMES utf8" );
		
		// Again, since PDO is a fucking piece of junk, we have to *manually* set the DB as the constructor completely ignores this DSN param.
		$object_dbConnection->exec( "USE db200250645" );
		
	} catch( PDOException $object_dbException ) {
		$object_dbConnection = null;
	}
?>
