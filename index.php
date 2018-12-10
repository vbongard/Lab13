<?php include "inc/html.php"; ?>
<!-- I suggest a z pattern with survey in the terminal area. Admin Log-in should be at the bottom-->
<header>
    <h1>Cool Instruments</h1>
    <?php include "inc/menu.php"; ?>
</header>
<section>
	<div class="topLeft">
    There are many cool instruments out there. Learn about the more fascinating ones by going through our menu! Which instrument is your favorite?
    </div>
    <div class="topRight">
    <a href="survey.php">Take our survey!</a>
    </div>
</section>
<img src="images/orchestra.jpg" alt="orchestra image" class="heroImage">
<!-- So I'm thinking for the index page, the survey should be at the bottom (terminal) area, and if the user
chooses not to click, it will move into the header for the other pages. -->
<div class="bottomLeft">
   <a href="login.php">Admin log-in</a>
</div>
<div class="bottomRight">
	<h3 class="subHeader">Instruments</h3>
	<ul>
		<li><a href="harmonica.php">Glass Harmonica</a></li>
		<li><a href="theremin.php">Theremin</a></li>
		<li><a href="hydraulophone.php">Hydraulophone</a></li>
	</ul>
</div>
</body>
</html>