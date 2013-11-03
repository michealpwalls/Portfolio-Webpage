portfolio-webpage-mobile
========================

 This repository holds my Portfolio-Webpage, augmented to target Mobile devices using JQuery Mobile.
 
 Portfolio-Webpage is my person Portfolio. It uses modern HTML5 markup and CSS3 styling.
 The design is Responsive, adapting to many different screen sizes.
 
 In addition to the Responsive design, the Portfolio-Webpage is fully Mobile-Aware with a targetted
 mobile App (mobile.html)
 
 The Desktop website now uses the Open Source detectmobilebrowsers.js library to detect mobile browsers
 and redirect users to the Mobile app.
 
 A nomobile override was added to the Desktop website (index.html?nomobile=true) to fascilitate switching
 from Desktop to Mobile easily.
 
 The Desktop website uses an older version of JQuery, with an aim of keeping it fully compatible with IE.



My Libraries
=============

 * cwd.js	-	Current Working Directory (protocol, domain and pathname)
 * mobile-switch.js		- Simple shim for detectmobilebrowsers.js that fascilitates easy switching.


3rd-Party Libraries Used (Mobile App)
=====================================

 * JQuery version 1.7.2
 * JQuery Mobile version 1.2.1
 * Swipe version 2.0	-	Copyright 2013 Brad Birdsall (MIT License)


3rd-Party Libraries Used (Desktop)
==================================

 * JQuery version 1.6.2
 * Photo Slider	- by Fabio Kenji
 * detectmobilebrowsers.js	-	Public Domain
