<?php include "inc/html.php"; ?>
<!-- rudamentary table, can probably just use bootstrap for the real table, this is just for the content -->
<form  action="afterSurvey.php" method="get">
    Full name: <input type="text" name="name"><br>
    What's your favorite instrument? <input type="text" name="favorite"><br>
    Do you play any instruments? <br><input type="radio" name="played" value="yes"> Yes <br><input type="radio" name="played" value="no"> No <br>
    If you could learn any instrument, what would it be? <input type="text" name="learn"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>