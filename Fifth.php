<?php Include "Third.php"; ?>
<h1>Forms</h1>
<h2>POST method</h2>
<form class="" action="Test1.php" method="post">
<label for="">firstname</label><br>
<input type="text" id="fn" name="fname" value=""><br>
<label for="">lastname</label><br>
<input type="text" id="ln" name="lname" value=""><br>
<input type="submit" name="" value="Send">
</form>

<h2>POST method</h2>
<form class="" action="Test2.php" method="get">
<label for="">firstname</label><br>
<input type="text" id="fn" name="fname" value=""><br>
<label for="">lastname</label><br>
<input type="text" id="ln" name="lname" value=""><br>
<input type="submit" name="" value="Send">
</form>
<?php Include "footer.php"; ?>