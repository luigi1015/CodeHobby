<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<title>Code Hobby</title>
		<link href="jquery-ui-1.10.3.custom-black-tie/css/custom-black-tie/jquery-ui-1.10.3.custom.css" rel="stylesheet">
		<script src="jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
		<script src="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
		<script>
			$(function() {
				$( "#tabs" ).tabs();
			});
			
			$("li.forum a").unbind('click');
		</script>
		<link rel="stylesheet" media="screen" href="codehobby.css" />
	</head>
	<body>
	<!--<div id="header">-->
		<?php include 'header.html'; ?>
	<!--</div>-->
	<div id="main"><!--Main Section-->
	<div id="content-main">
		<?php include 'main.html'; ?>
	</div>
	<div id="content-projects">
		<?php include 'projects.html'; ?>
	</div>
	<div id="content-forum">
		<?php include 'http://codehobby.net/MyBB/'; ?>
	</div>
	<div id="content-contact">
		<?php include 'projects.html'; ?>
	</div>
	</div><!--Main Section-->
	<div id="footer">
		<?php include 'footer.html'; ?>
	</div>
	</body>
</html>
