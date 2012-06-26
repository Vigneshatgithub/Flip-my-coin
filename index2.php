<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="csstyle.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
var msg="What  if  ";
var info1="this is an attempt to simulate coin toss. when the world of internet has grown big enough to help you buy gadgets online, why not we make it simple here.";
var info2="this would not be your first time to hear this. you can't wait to watch the coin in air before the cricket match begins. also, you can't stay unbaffled ever! ";
var info3="there is no little. there is just more. note that there is no charge for stupidity. so dig into and tilt it. you won't get hurt. ";
var info4="we dont want to. but if you are still certain, just close the browser window. but do peep in tomorrow.";


$(document).ready(function(){
$(".siteinfo").mouseover(function(){
			$("div.expandbottom").css("visibility","visible");
			
			//alert(this.id);			
			if(this.id=="info1")
			{
			 document.getElementById("siteinfotxt").innerHTML=info1;			 
			}
			if(this.id=="info2")
			{
			 document.getElementById("siteinfotxt").innerHTML=info2;
			}
			if(this.id=="info3")
			{
			 document.getElementById("siteinfotxt").innerHTML=info3;
			}
			if(this.id=="info4")
			{
			 document.getElementById("siteinfotxt").innerHTML=info4;
			}
		});
		
		$(".siteinfo").mouseout(function(){
			$("div.expandbottom").css("visibility","hidden");
		});

$("#scr1").click(function(){
		var mindtext=document.getElementById("mindtext").value;
		if(mindtext!="")
		{
			$("div.ht").css("visibility","visible");
			$("div.dynamic").css("visibility","hidden");
			$("div.design-straight").css("visibility","hidden");
			document.getElementById("dis2").innerHTML=mindtext;
		}
	});

$("h1#chead").click(function(){    
	$("div.design-straight").css("visibility","visible");
    $("div.httext").css("visibility","visible");
    $("div.ht").css("visibility","hidden");
	document.getElementById("userchosen").innerHTML=msg+"Heads";
	document.getElementById("ucid").value="Heads";
	document.getElementById("dis3").innerHTML="Heads";
  });

$("h1#ctail").click(function(){    
	$("div.design-straight").css("visibility","visible");
    $("div.httext").css("visibility","visible");    
    $("div.ht").css("visibility","hidden");
	document.getElementById("userchosen").innerHTML=msg+"Tails";
	document.getElementById("ucid").value="Tails";
	document.getElementById("dis3").innerHTML="Tails";
  });

$("h5#clickable").click(function(){    
    $("div.httext").css("visibility","hidden");
    $("div.ht").css("visibility","visible");	
    $("div.design-straight").css("visibility","hidden");    
  });

$("#scr2").click(function(){
var httext=document.getElementById("httext").value;
	if(httext!="")
	{
		$("div.intheair").css("visibility","visible");
		$("div.httext").css("visibility","hidden");
		$("div.design-straight").css("visibility","hidden");
		document.getElementById("dis4").innerHTML=httext;
	}
});

var rand;
$("div.intheair").click(function(){
	$("div.intheair").css("visibility","hidden");
	$("div.design-straight").css("visibility","visible");	
	$("div.event").css("visibility","visible");
	rand=Math.floor(Math.random()*2);	
	//alert(rand);
	if(rand==0)
	{
		//alert("inside 0");
		document.getElementById("dis1").innerHTML="Heads";
		//alert(document.getElementById("dis1").innerHTML);
	}
	else
	{
		//alert("inside 1");
		document.getElementById("dis1").innerHTML="Tails";
	}	
	//document.getElementById("dis2").innerHTML=mindtext;
});


});

function setFocus()
{
document.getElementById('mindtext').focus();
};

</script>
</head>
<body onload="setFocus();">

<div class="design-straight"></div>

<div class="dynamic" >
<table>
<tr><td><h2>What's in your mind?</h2></td></tr>
<tr><td><textarea rows="5" cols="50" maxlength="200" autofocus="autofocus" name="mindtext" required="required" id="mindtext" class="textui"></textarea></td></tr>
<tr>
<td><input type="image" src="images/clicknext.png" class="next" id="scr1"/></td>
<td><h5 class="textclick">(uff! you can share it with us too!)</h5></td>
</tr>
</table>
</div>

<div class="ht">
<!--
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
-->
<table>
<tr>
	<td>
		<div class="pick">
			<h1 class="bigpick" id="chead" onmouseover="this.style.color='#303030';" onmouseout="this.style.color='#85A3E0';">Heads</h1>
		</div>
	</td>
	<td>
		<h3>Or</h3>
	</td>
	<td>
		<div class="pick">
			<h1 class="bigpick" id="ctail" onmouseover="this.style.color='#303030';" onmouseout="this.style.color='#85A3E0';">Tails</h1>
		</div>
	</td>
</tr>
</table>
</div>

<div class="httext">
<table>
<tr><td><h2><label id="userchosen"><label></h2></td></tr>
<tr><td><textarea rows="7" cols="50" maxlength="200" autofocus="autofocus" name="httext" required="required" id="httext" class="textui"></textarea></td></tr>
<tr>
<td><input type="image" src="images/clicknext.png" class="next" id="scr2"/></td>
<td><h5 class="textclick" id='clickable'>choose again?</h5></td>
</tr>
<tr><td><input id="ucid" type="hidden" name="userchoice" /></td></tr>
</table>
</div>

<div class="intheair">
<img src='images/intheair.gif' />
<h5 class="textclick">click to reveal</h5>
</div>

<div class="event">
<p>
<div class="pick" id="openhand">
<h1 class="bigpick" ><label class="grandresult" id="dis1"></label></h1>
</div>
With <label class="grand" id="dis2"></label> in your mind,<br/>
You chose <label class="grand" id="dis3"></label> for <label class="grand" id="dis4"></label></p> 

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


<div  class="bottomline">
<table>
<tr>
<td class="siteinfo" id="info1" >what's this?</td>
<td class="siteinfo" id="info2" >but why?</td>
<td class="siteinfo" id="info3" >little more..</td>
<td class="siteinfo" id="info4" >get me out!</td>
</tr>
</table>
</div>
<div class="expandbottom">
<table class="siteinfoex">
<tr>
<td id="siteinfotxt"></td>
</tr>
</table>
</div>

</body>
</html>