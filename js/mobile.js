/**
 * mobile.js	-	Portfolio-Webpage for Mobiles
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
 **/

// Return an associative array of the GET parameters.
function getGETParams()
{
	//declare some arrays to work with
    var keys_values = [];
    var pair = [];
    
    // Start by declaring and initializing the first array of GET pairs (Splitting at the &, after the first ?)
    var urlSplit = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');

	// Iterate through the array to isolate the pairs
    for(var i = 0; i < urlSplit.length; i++)
    {
		// Split the array at the = symbol to isolate the individual pairs
        pair = urlSplit[i].split('=');
        
        // From the pairs, create a more human-readable, Associative array (The "key" is named the first value in the pair)
        keys_values.push(pair[0]);
        keys_values[pair[0]] = pair[1];
    }
    
    // return the array
    return keys_values;
}

// Document ready event handler (Anonymous function)
$(document).ready(
	function() {
		// Store any GET params sent in the URL
		args = [];
		args = getGETParams();

		// Initialize the Swipe-Slider
		window.mySwipe = Swipe(document.getElementById('slider'));

		// simple function to better fascilitate redirects
		fascilitateRedirects();

		// We're Ready..

	}
);

// fascilitate external redirecting to inner page sections
function fascilitateRedirects() {
	switch( args['redirect'] ) {
		case "bcontacts":
			$.mobile.changePage("#bcontacts");
			break;
		default:
			break;
	}
}
