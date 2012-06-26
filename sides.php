<?php 
	require("master.php");
	if(empty($_POST["mindtext"]))
	{
		echo 'Unauthorized access identified. Please <a href="http://localhost/yellowduck/">Go Back</a> and recheck your link';
	}
	else
	{
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="csstyle.css" />
<script type="text/javascript" src="jquery.js"></script>
<script language="javascript" type="text/javascript" src="checks.js"></script>
<script type="text/javascript">

var msg="What  if  ";
$(document).ready(function(){
$("div.design-straight").css("visibility","hidden");
$("div.design-slant").css("visibility","hidden");
  $("img.chead").click(function(){    
    $("div.httext").css("visibility","visible");
    $("div.ht").css("visibility","hidden");
	document.getElementById("userchosen").innerHTML=msg+"Heads";
	document.getElementById("ucid").value="Heads";
  });
});

$(document).ready(function(){
  $("img.ctail").click(function(){    
    $("div.httext").css("visibility","visible");
    $("div.design-straight").css("visibility","visible");
    $("div.design-slant").css("visibility","visible");
    $("div.ht").css("visibility","hidden");
	document.getElementById("userchosen").innerHTML=msg+"Tails";
	document.getElementById("ucid").value="Tails";
  });
});

$(document).ready(function(){
  $("h5.textclick").click(function(){    
    $("div.httext").css("visibility","hidden");
    $("div.ht").css("visibility","visible");	
    $("div.design-straight").css("visibility","hidden");
    $("div.design-slant").css("visibility","hidden");	
  });
});

</script>
<script language="javascript" type="text/javascript" src="checks.js"></script>
</head>
<body>
<?php
$mindtext=$_POST["mindtext"];
?>
<div class="ht">
<table>
<tr>
<td><img src="images/heads.png" class="chead" /></td>
<td></td>
<td></td>
<td><h2 class="hort">Or</h2></td>
<td></td>
<td></td>
<td><img src="images/tails.png" class="ctail" /></td>
</tr>
</table>

</div>
<div class="design-straight"></div>
<div class="design-slant"></div>
<div class="httext">
<form method="post" action="prob.php" onsubmit="return checkInputs(document.getElementById('httext').value)">
<table>
<tr><td><h1><label id="userchosen"><label></h1></td></tr>
<tr><td><textarea rows="7" cols="50" maxlength="200" autofocus="autofocus" name="httext" required="required" id="httext" class="textui"></textarea></td></tr>
<tr>
<td><input type="image" src="images/clicknext.png" class="next" /></td>
<td><h5 class="textclick">choose again?</h5></td>
</tr>
<tr><td><input id="ucid" type="hidden" name="userchoice" /></td></tr>
<?php
echo "<tr><td><input type='hidden' name='mindtext2' value='".$mindtext."'></input></td></tr>";
?>
</table>
</form>
</div>
</body>
</html>
<?php
}
?>