<?php 
	require("master.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="csstyle.css" />
</head>
<body>
<form method="post" action="sides.php">
<div class="dynamic">
<table>
<tr><td><h1>What's in your mind?</h1></td></tr>
<tr><td><textarea rows="5" cols="50" maxlength="200" autofocus="autofocus" name="mindtext" required="required"></textarea></td></tr>
<tr><td><input type="image" src="images/clicknext.png" class="next" /></td></tr>
</table>
</div>
</form>
</body>
</html>