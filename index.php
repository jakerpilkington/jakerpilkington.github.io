<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" text="text/css" href="stylesheet.css">
		<script type="text/javascript" src="script.js"></script>
		<title>
			I am TheJake
		</title>
	<head>
	
	<body>
		<!--    This is the bit at the top of every page showing pages on the site with the main catagories    -->
		<div class="banner">
			<table class="selection" width=100%>
				<tr>
					<td onClick="window.location.assign('http://TheJake.tk')" class="banner-item"><a href="#">Homepage</a></td>
					<td onClick="window.location.assign('http://google.co.uk')" class="banner-item"><a href="#">Google</a></td>
					<td onClick="window.location.assign('http://www.piday.org/million/')" class="banner-item"><a href="#">Pi</a></td>
					<td onClick="window.location.assign('http://i-want-answers-jakepilkington.c9users.io/the-world/')" class="banner-item"><a href="#">The World</a></td>
				</tr>
			</table>
		</div>
		
		<!--	This is the section containing all login things such as input boxes	-->
		
		<div id="loginHolder" class="login">
			<p class="logintext">Username:</p>
			<input class="logininput" type="text" name="username" id="username"/><br>
			<p class="logintext">Password:</p>
			<input class="logininput" type="password" name="password" id="password"/>
			<button onClick="sendLogin();">Login</button>
		</div>
		<p style="color: blue;" id="messageHold"></p>
		
		<div class="title">
			<br>
		  <h1>Jake's Space<br><span style="font-size: 25px;">the web is wonderful</span></h1>
		<?php
            echo "Hi, I'm a PHP script!";
        ?>
			<br>
		</div>
		
		<div class="navigation">
		</div>
		
		<div class="content">
			<div class="homepage">
				<h2>Homepage</h2>
			
					<p>Welcome to the place on the internet that Jake inhabits. This the place where I will keep all my wonderful ravings and creations I want to share with the internet. Here you will find bubbles of my fun, slightly mad, and crazy ideas and creations. Ahead, there be danger: proceed with caution.</p>
				
			</div>
				
			<div class="introduction">
				<h3>About</h3>
			
				<p>Basically, what that is trying to say is there is no particular oreder to this place. Much like my brain this will simply be a collection of vague ideas and nonsensical rambles. I will of course try and organise these in a way that you <em>might</em> be able to comprehend but we'll see!</p>
			</div>
			
			<hr style="width: 80%;">
			
			<div class="about">
				<h3>Contact</h3>
			
					<p>As some of you may wish to contact me for any reason I will of course give you means to do so. I will list here a couple of ways you can contact me:</p> 
			
					<ul>
						<li>Email: <a href="mailto:me@TheJake.tk">me@TheJake.tk</a></li>
						<li>Find me on twitter: <a href="https://twitter.com/MeJakeP">@MeJakeP</a></li>
					</ul>
			</div>
		</div>
	</body>
</html>
