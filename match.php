<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>~Crazy Matchmaker~</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<div id="container">
	<div id="header">
		<h1>Crazy Matchmaker</h1>
		<h3><center>Are We Compatible?</center></h3>
	</div>
	<div id="nav">
		<ul>
			<li><a href="index.html" class="selected" title="home page">home</a></li>
		</ul>

	</div>
	<div id="content">
		<div id="page">
			<center>
			<?php
				$name = $_POST['firstname'];
				if ($_POST['gender'] == 'female')
				{
				$computerName = 'Emmy';
				}

				if ($_POST['gender'] == 'male')
				{
				$computerName = 'Chuck';
				}

				echo '<h1><font size=6>Hey there, ' . $name . '! <br>My name is ' . $computerName .'.</font></h1><hr/>';
				$hometown = $_POST['hometown'];
				
				$userBdayMonth = $_POST['month'];
				$userBdayDay = $_POST['day'];
				$userBdayYear = $_POST['year'];
				
				echo '<h3><br>So, I see that you were born on ' . $userBdayMonth . ' ' . $userBdayDay . ', ' . $userBdayYear . '.';

				echo '<br>You wanna hear something weird? <br> I was born on that day too!! <br> Were we <i>';
				echo 'separated at birth</i>? This is kinda weird. Anyways.....<br><br>';
				

				echo '<br>You\'re from ' . $hometown . '? <br>Me too!! Another similarity? How crazy is that?!?!';
 				echo '<br> Hmm....I wonder if we have ever ran into each other?? <br>You probably wouldn\'t remember me anyways.</h3>';
				echo '<br><br>';

				

				if ($_POST['read'] == 'checked')
				{
				$userHobbies = 'read';
				echo '<h3> You like to ' . $userHobbies . '? <br>Like magazines or books? Either way, me too!!<br></h3>';
				}
				

				if ($_POST['playvg'] == 'checked')
				{
				$userHobbies = 'play video games';
				echo '<h3> You like to ' . $userHobbies . '? <br>Is there a better way to spend your Saturday nights? <br> I think not!<br><br></h3>';
				}
				

				if ($_POST['sleep'] == 'checked')
				{
				$userHobbies = 'sleep';
				echo '<h3> You like to ' . $userHobbies . '? <br> Ummm...Who doesn\'t? It gives you more time to dream...<br><br></h3>';
				}
				

				if ($_POST['shop'] == 'checked')
				{
				$userHobbies = 'shop';
				echo '<h3> You like to ' . $userHobbies . '? <br>We should go on a shopping spree together!<br><br></h3>';
				}


				if ($_POST['friends'] == 'checked')
				{
				$userHobbies = 'hang out with your friends';
				echo '<h3> You like to ' . $userHobbies . '? <br>We should all go see a movie or something.  Sounds like fun, right?<br><br></h3>';
				}

				


				echo '<h3>You know what? I just realized something..... <br> We enjoy the same kind of activities! What a coincidence! </h3><br><br>';


			?>


			<hr/><br><h2>CONCLUSION: <br>We are perfect for each other!!!  </h2><br/><br/>
			<img src="http://1.bp.blogspot.com/_PoKlZqhMfAA/SSN3xF7zeCI/AAAAAAAAApg/xuKahGuBXLk/s320/300px-Face-wink.svg.png" width=100/>
			<hr/>
			<br>
			
			




			</center>
	
		</div>
		<div id="sidebar">
			<h4>About us</h4><center>
			<p class="bold">This page was created by 4 CPSC 350 students:</p>
			
			<ul>
				<li>Ford Peterson</li>
				<li>Amy Sams</li>
				<li>Erin Wuepper</li>
				<li>Rebecca Zeitz</li>
			</ul></center>
	
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer">
		<p>&copy; 2008 mySite. Design: <a href="http://www.spyka.net" title="spyka Webmaster">spyka webmaster</a> available from <a href="http://www.justfreetemplates.com" title="free css templates">Just Free Templates</a>. Valid <a href="http://validator.w3.org/check/referer" title="valid XHTML strict">XHTML</a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" title="CSS">CSS</a></p>
	</div>
			
</div>
</body>
</html>
