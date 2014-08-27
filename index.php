﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<!--[if lt IE 9]>
			<script src="files/html5shiv.js"></script>
		<![endif]-->
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<title>Code Hobby</title>
		<!-- <link href="jquery-ui-1.10.3.custom-black-tie/css/custom-black-tie/jquery-ui-1.10.3.custom.css" rel="stylesheet"> -->
		<script src="jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
		<script src="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
<!--
		<script>
			$(function() {//This function is what enables the tab functionality from jQuery UI.
				$( "#tabs" ).tabs();
			});
		</script>
-->
		<script>
			$(document).ready( function() {
				//Hide the projects and contact section by default.
				//$( "#main" ).show();
				$( "#content-main" ).show();
				$( "#content-main" ).addclass( "content-background" );
				$( "#content-projects" ).hide();
				$( "#content-projects" ).removeclass( "content-background" );
				$( "#content-contact" ).hide();
				$( "#content-contact" ).removeclass( "content-background" );

				$( '#link-main' ).click( function() {
					$( "#content-main" ).show();
					$( "#content-main" ).addclass( "content-background" );
					$( "#content-projects" ).hide();
					$( "#content-projects" ).removeclass( "content-background" );
					$( "#content-contact" ).hide();
					$( "#content-contact" ).removeclass( "content-background" );
				});

				$( '#link-projects' ).click( function() {
					$( "#content-main" ).hide();
					$( "#content-main" ).removeclass( "content-background" );
					$( "#content-projects" ).show();
					$( "#content-projects" ).addclass( "content-background" );
					$( "#content-contact" ).hide();
					$( "#content-contact" ).removeclass( "content-background" );
				});

				$( '#link-contact' ).click( function() {
					$( "#content-main" ).hide();
					$( "#content-main" ).removeclass( "content-background" );
					$( "#content-projects" ).hide();
					$( "#content-projects" ).removeclass( "content-background" );
					$( "#content-contact" ).show();
					$( "#content-contact" ).addclass( "content-background" );
				});
					
				
			});
		</script>
		<link rel="stylesheet" media="screen" href="reset.css" />
		<link rel="stylesheet" media="screen" href="codehobby.css" />
	</head>
	<body>
		<!--<div id="tabs">--><!--Tabs div, this is what tells jquery ui this is the place it needs to set up the tabs.-->
			<header role="banner">
				<div id="header">
					<h1>Code Hobby</h1>
					<nav role="navigation">
						<table>
							<tr>
								<td>
									<a id="link-main" href="#content-main">Main</a>
								</td>
								<td>
									<a id="link-projects" href="#content-projects">Projects</a>
								</td>
								<td>
									<a id="link-contact" href="#content-contact">Contact</a>
								</td>
							</tr>
						</table>
					</nav>
				</div>
			</header>
			<!--<div id="main">--><!--Main Section-->
				<div id="content-main">
					<article>
						<p>Code Hobby is a project I started in 2013 to do some programming in my spare time. The projects have no real common theme except what I'm interested in working on at the time. They range from small proof of concept pojects to satisfy my curiosity to larger projects meant to be used. The code has been and will be open source whenever possible.</p>
						<p>As I work on more programming projects, I'll link to them on this site. Feel free to use the code as allowed by the license.</p>
						<p>Please feel free to take a look at some of the projects in the Projects section.</p>
					</article>
				</div>
				<div id="content-projects">
					<h2>Programs</h2>
					<article>
						<p><a href="https://github.com/luigi1015/SudokuCreator" target="_blank">SudokuCreator</a>
						<br>
						A C++ command line program to create random Sudoku puzzles.</p>
					</article>

					<article>
						<p><a href="https://github.com/luigi1015/Random-Cpp" target="_blank">Random-Cpp</a>
						<br>
						Some C++ code to generate various types of pseudo-random data.</p>
					</article>

					<article>
						<p><a href="https://github.com/luigi1015/Powerball" target="_blank">Powerball</a>
						<br>
						A C++ project to automatically download, save and do some very basic statistical analysis of the previously drawn Powerball numbers. It works but needs some optimization.</p>
					</article>

					<article>
						<p><a href="https://github.com/luigi1015/Quicksort-CPP" target="_blank">Quicksort-CPP</a>
						<br>
						A little bit of C++ code that implements an in-place version of Quicksort.</p>
					</article>

					<article>
						<p><a href="https://github.com/luigi1015/InsertionSort-Cpp" target="_blank">InsertionSort-Cpp</a>
						<br>
						Some C++ code that implements a version of Insertion Sort.</p>
					</article>

					<article>
						<p><a href="https://github.com/luigi1015/Heapsort-Cpp" target="_blank">Heapsort-Cpp</a>
						<br>
						A small C++ project that implements a version of Heapsort.</p>
					</article>

					<article>
						<p><a href="https://github.com/luigi1015/CountingSort-Cpp" target="_blank">CountingSort-Cpp</a>
						<br>
						A few lines of C++ code that implements a version of Counting Sort.</p>
					</article>

					<article>
						<p><a href="https://github.com/luigi1015/Quicksort-Java" target="_blank">Quicksort-Java</a>
						<br>
						Like Quicksort-CPP, it's some code that implements an in-place version of Quicksort. The difference is this one is in Java.</p>
					</article>

					<article>
						<p><a href="https://github.com/luigi1015/Timesheet" target="_blank">Timesheet</a>
						<br>
						A small Java project for use at work to create a timesheet. It still needs some work.</p>
					</article>

					<article>
						<p><a href="https://github.com/luigi1015/GCD" target="_blank">GCD</a>
						<br>
						A very small project to figure out the greatest common divisor of two different numbers.</p>
					</article>

					<article>
						<p><a href="https://github.com/luigi1015/PrimeGenerator" target="_blank">PrimeGenerator</a>
						<br>
						A small program to generate some primes starting with the smallest and working from there. Like a few of these projects, it's more of a proof of concept to satisfy some curiosity of mine than anything meant to be used in production.</p>
					</article>

					<article>
						<p><a href="https://github.com/luigi1015/PiGenerator" target="_blank">PiGenerator</a>
						<br>
						A small program to generate the first few digits of Pi.</p>
					</article>
				</div>
				<div id="content-contact">
					<form action="mail.php" method="POST">
						Fill this form out and press send to send me a note.
						<br>
						None of the fields are required but I'd like at least you name, a message and some contact info.
						<br>
						<br>
						Name
						<br>
						<input type="text" name="name">
						<br>
						<br>
						Email
						<br>
						<input type="text" name="email">
						<br>
						<br>
						Phone
						<br>
						<input type="text" name="phone">
						<br>
						<br>
						Message
						<br>
						<textarea name="message" rows="6" cols="25"></textarea>
						<br>
						<?php
							require_once('recaptchalib.php');
							$publickey = "6LccK-8SAAAAAFOjA_GQodwAA0uxsXTnRDZ8a4B_";
							echo recaptcha_get_html($publickey);
						?>
						<br>
						<input type="submit" value="Send"><input type="reset" value="Clear">
					</form>
				</div>
			<!--</div>--><!--Main Section-->
		<!--</div>--><!--Tabs div-->

		<div id="footer">
			<br>
			<footer role="contentinfo">
				<table>
					<tr>
						<td>
							<div id="footer-left">
								<span class="social-element">
											<!-- GitHub -->
											<a href="https://github.com/organizations/CodeHobbyNet" target="_blank"><img src="Icons/GitHub-Mark-32px.png" title="My GitHub Page" alt="GitHub" width="32" height="32"></a>
								</span>

								<span class="social-element">
											<!-- Twitter icon code -->
											<a href="https://twitter.com/CodeHobbyNet" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @CodeHobbyNet</a>
											<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
								</span>

								<span class="social-element">

											<!-- Google+ icon code -->
											<a href="https://plus.google.com/110417500518525290729?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;">
												<img src="https://ssl.gstatic.com/images/icons/gplus-16.png" title="My Google+ Page" alt="Google+" style="border:0;width:16px;height:16px;"/>
											</a>
								</span>

								<span class="social-element">
											<!-- Facebook icon code -->
											<iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fcodehobby&amp;width&amp;height=35&amp;colorscheme=light&amp;layout=button&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:20px;" allowTransparency="true"></iframe>
								</span>
							</div>
						</td>
						<td>
							<div id="footer-right">
								<a href="LICENSE" target="_blank">©2013 Code Hobby</a>
							</div>
						</td>
					</tr>
				</table>
			</footer>
		</div>
	</body>
</html>
