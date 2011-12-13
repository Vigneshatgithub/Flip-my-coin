<?php 
	require("master.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="csstyle.css" />
</head>
<body>
<?php
$mindtext=$_POST["mindtext"];
?>
<div class="ht">
<form>
<table>
<tr>
<td><input type="image" src="images/heads.png" /></td>
<td></td>
<td></td>
<td><h2 class="hort">Or</h2></td>
<td></td>
<td></td>
<td><input type="image" src="images/tails.png" /></td>
</tr>
</table>
</form>
</div>
<div class="httext">
<form method="post" action="">
<table>
<tr><td><h1>What if ?</h1></td></tr>
<tr><td><textarea rows="7" cols="50" maxlength="200" autofocus="autofocus" name="httext" required="required"></textarea></td></tr>
<tr><td><input type="image" src="images/clicknext.png" class="next" /></td></tr>
</table>
</div>
</body>
</html>