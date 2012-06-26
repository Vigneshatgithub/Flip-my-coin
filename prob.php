<?php 
	require("master.php");	
	if(empty($_POST["httext"]) or empty($_POST["userchoice"]))
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
<script type="text/javascript">
$(document).ready(function(){
  $("div.intheair").click(function(){    
    $("div.intheair").css("visibility","hidden");
    $("div.event").css("visibility","visible");
	document.getElementById("userchosen").innerHTML=msg+"Heads";
	document.getElementById("ucid").value="Heads";
  });
});
</script>
</head>
<body>

<div class="intheair">
<img src='images/intheair.gif' />
<h5 class="textclick">click to reveal</h5>
</div>
<?php
$rnumber=mt_rand(1,1000);
if($rnumber<=500)
{
$htresult="Heads";
}
else
{
$htresult="Tails";
}
?>
<div class="event">
and it is 
<?php
echo "<label class='grandresult'>".$htresult."</label><br/> <p>With <label class='grand'>".$_POST["mindtext2"]."</label> in your mind</p><br />";
echo "<p>You chose <label class='grand'>".$_POST["userchoice"]."</label> for <label class='grand'>".$_POST["httext"]."</label></p> <br />";
if($htresult==$_POST["userchoice"])
{
   echo "You got what you opted !<br/><hr>";
}
else
{
   echo "Its the other way !<br/><hr>";
}
//echo $_POST["mindtext2"];
?>
 <iframe src="https://www.facebook.com/plugins/like.php?href=http://flipmy.co.in"
        scrolling="no" frameborder="0"
        style="border:none; width:450px; height:80px"></iframe>   


<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-text="Try yellow duck, its purely fun" data-url="http://flipmy.co.in">Tweet</a>
      <script>
	  !function(d,s,id)
	  {var js,fjs=d.getElementsByTagName(s)[0];
	  if(!d.getElementById(id)){js=d.createElement(s);
	  js.id=id;js.src="//platform.twitter.com/widgets.js";
	  fjs.parentNode.insertBefore(js,fjs);}}
	  (document,"script","twitter-wjs");
	  </script>		
		
</div>


</body>
</html>
<?php
}
?>