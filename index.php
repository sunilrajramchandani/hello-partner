<!DOCTYPE html>
<html>
<head>
	<title>Archie Arintok</title>
	
		
		<meta keyword="Sunil Raj" vaue="Archie Arintok"/>
		<meta keyword="description" value="WEBDEVT Exercise #1"/>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-------------------------------CSS NG NAVBAR----------------------------->
		<link rel="stylesheet" type="text/css" href="navbar.css">
		<link rel="stylesheet" type="text/css" href="realcss.css"/>
</head>
<body>
<!-----------------------------Navbar----------------------------->
<?php include('nabar.php'); ?>
<!------------------------------HOME------------------------------->
	<div class="container">
			<p class="h1 text-center"><strong>ARCHIE ARINTOK</strong></p>
			<p class="h2 text-center text-muted">The Heartbreak Kid</p>
			<img src='Archie.png' class="img-responsive img-circle">

	</div>
	<hr> 
<!---------------------------- TOP 5------------------------------>
	<div class = "container"  id = "Top">
		<p class="h4">TOP 5 FOOD</p>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			<div class="item">
			  <img src="Chicken.gif" alt="chicken">
			</div>
			<div class="item active">
			  <img src="taco.gif" alt="taco">
			</div>
			<div class="item">
			  <img src="salad.gif" alt="salad">
			</div>
			<div class="item">
			  <img src="donut.gif" alt="donut">
			</div>
			<div class="item">
			  <img src="pizza.gif" alt="pizza">
			</div>			
		  </div>
		</div>
	</div>
	<!------------------------- ABOUT ME ------------------------->	
		<hr>
	<div class="container" id = "About">
		<p class="h4"><em>About Archie</em></p>
		<blockquote>
			<p class = "well">I am Ivann Archie Arintok, 
			a student of College of Saint Benilde currently taking up BS-Information Systems. 
			I am 20 years old. I grew up in the province of Batangas and just moved to Manila for education and work purposes. 
			There are times when I miss the province because of its simplicity and closeness to nature. 
			Back then, I wrote for DLSU’s official Filipino school publication, Ang Pahayagang Plaridel. 
			Coming from a business course, my transfer to a computer related one has made me more comfortable knowing that this is where my heart is. 
			I am interested in technology and I like reading articles about it. 
			I feel excited whenever a new technological innovation comes out and I look forward to its implementation here in the Philippines.
			I love tinkering and customizing software to extend its capabilities. 
			I chose Information Systems as my course because it goes in line with my interests. 
			Furthermore, I like to gain technical knowledge and programming skills so I can one day become a successful IT professional. 
			I also frequently watch movies on my spare time and I am a great fan of Tom Hanks and Leonardo DiCaprio. 
			I also watch TV series such as DareDevil and Silicon Valley. I also read books, fiction and non-fiction alike. 
			Often, I find books are a great way to learn new things and at the same time, gain a temporary deviation from reality. 
			The type of music I generally listen to is alternative rock and indie folk; a type of music that combines Western country music with the sounds of contemporary folk music.  
			I am fond of playing team sports because it challenges me whenever I play with other people. Among the team sports, 
			I prefer playing basketball the most and despite the hate directed towards him, Lebron James is my favorite player.</p>
			<footer>Ivan Archie Arintok</footer>
			</blockquote>
	</div>
</body>
</html>

