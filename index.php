<?php 
	require("master.php");	
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="csstyle.css" />
<script language="javascript" type="text/javascript" src="checks.js"></script>
</head>
<body>
<form name="formone" method="post" action="sides.php" onSubmit="return checkInputs(document.getElementById('mindtext').value)">
<div class="dynamic" >
<table>
<tr><td><h1>What's in your mind?</h1></td></tr>
<tr><td><textarea rows="5" cols="50" maxlength="200" autofocus="autofocus" name="mindtext" required="required" id="mindtext"></textarea></td></tr>
<tr>
<td><input type="image" src="images/clicknext.png" class="next" /></td>
<td><h5 class="textclick">(uff! you can share it with us too!)</h5></td>
</tr>
</table>
</div>
</form>
</body>
</html>