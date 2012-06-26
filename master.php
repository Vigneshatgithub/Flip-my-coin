<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>
Yellow Duck
</title>
<link rel="stylesheet" type="text/css" href="csstyle.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
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
	});
</script>
</head>
<body class="mb">
<div class="design-straight"></div>
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
