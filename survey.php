<?php include "inc/html.php"; ?>
<form  action="afterSurvey.php" method="get">
    Full name: <input type="text" name="name"><br>
    Have you heard of any of these instruments before? <input type="checkbox" name="heard"><br>
    What was your favorite instrument of the three? <br><input type="radio" name="fav" value="theremin"> Theremin <br><input type="radio" name="fav" value="harmonica"> Glass Harmonica <br><input type="radio" name="fav" value="hydraulophone"> Hydraulophone <br>
    What did you want to learn more about that wasn't in this website? <textarea rows="4" cols="50"></textarea>
    <a href="afterSurvey.php">Submit</a>
</form>
</body>
</html>