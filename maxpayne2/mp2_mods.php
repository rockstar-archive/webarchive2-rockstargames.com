
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>
<!--rockstararchive script-->
<script type="text/javascript" src="https://rockstar-archive.h0rizon.dev/webarchive/js/rgPatcher.js"></script>
<!--rockstararchive script-->
<title>Rockstar Games Presents Max Payne 2: The Fall of Max Payne</title>
<script src="iefix.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">  
#divUpControl{position:absolute; width:400; left:400; top:40; z-index:1;} 
#divDownControl{position:absolute; width:400; left:400; top:360; z-index:1;} 
#divContainer{position:absolute; width:400; height:313; overflow:hidden; top:45; left:400; clip:rect(0,400,313,0); visibility:visible} 
#divContent{position:absolute; top:45; left:400;font-size:11px;font-family:Verdana;line-height:18px;text-align:justify;}
</style>
<script language="javascript" src="flashdetection.js"></script>
<Script language="javascript">
// begin absolutely positioned scrollable area object scripts 
/*
Extension developed by David G. Miles (www.z3roadster.net/dreamweaver)
Original Scrollable Area code developed by Thomas Brattli 
To add more shock to your site, visit www.DHTML Shock.com
*/

function lib_bwcheck(){ //Browsercheck (needed)
	this.ver=navigator.appVersion
	this.agent=navigator.userAgent
	this.dom=document.getElementById?1:0
	this.opera5=(navigator.userAgent.indexOf("Opera")>-1 && document.getElementById)?1:0
	this.ie5=(this.ver.indexOf("MSIE 5")>-1 && this.dom && !this.opera5)?1:0; 
	this.ie6=(this.ver.indexOf("MSIE 6")>-1 && this.dom && !this.opera5)?1:0;
	this.ie4=(document.all && !this.dom && !this.opera5)?1:0;
	this.ie=this.ie4||this.ie5||this.ie6
	this.mac=this.agent.indexOf("Mac")>-1
	this.ns6=(this.dom && parseInt(this.ver) >= 5) ?1:0; 
	this.ns4=(document.layers && !this.dom)?1:0;
	this.bw=(this.ie6 || this.ie5 || this.ie4 || this.ns4 || this.ns6 || this.opera5)
	return this
}
var bw=lib_bwcheck()

var speed=50 
 
var loop, timer 
 
function ConstructObject(obj,nest){ 
    nest=(!nest) ? '':'document.'+nest+'.' 
    this.el=bw.dom?document.getElementById(obj):bw.ie4?document.all[obj]:bw.ns4?eval(nest+'document.'+obj):0; 
    this.css=bw.dom?document.getElementById(obj).style:bw.ie4?document.all[obj].style:bw.ns4?eval(nest+'document.'+obj):0; 
    this.scrollHeight=bw.ns4?this.css.document.height:this.el.offsetHeight 
    this.clipHeight=bw.ns4?this.css.clip.height:this.el.offsetHeight 
    this.up=MoveAreaUp;this.down=MoveAreaDown; 
    this.MoveArea=MoveArea; this.x; this.y; 
    this.obj = obj + "Object" 
    eval(this.obj + "=this") 
    return this 
} 
function MoveArea(x,y){ 
    this.x=x;this.y=y 
    this.css.left=this.x 
    this.css.top=this.y 
} 
 
function MoveAreaDown(move){ 
	if(this.y>-this.scrollHeight+objContainer.clipHeight){ 
	divUpArrow.css.visibility='visible'
    this.MoveArea(0,this.y-move) 
    if(loop) setTimeout(this.obj+".down("+move+")",speed) 
	} 
	else divDownArrow.css.visibility='hidden' 
} 
function MoveAreaUp(move){ 
	if(this.y<0){ 
	divDownArrow.css.visibility='visible'
    this.MoveArea(0,this.y-move) 
    if(loop) setTimeout(this.obj+".up("+move+")",speed) 
	} 
	else divUpArrow.css.visibility='hidden' 
} 
 
function PerformScroll(speed){ 
	if(initialised){ 
		loop=true; 
		if(speed>0) objScroller.down(speed) 
		else objScroller.up(speed) 
	} 
} 
 
function CeaseScroll(){ 
    loop=false 
    if(timer) clearTimeout(timer) 
} 
var initialised; 
function InitialiseScrollableArea(){ 
    objContainer=new ConstructObject('divContainer') 
    objScroller=new ConstructObject('divContent','divContainer') 
    objScroller.MoveArea(0,0) 
    objContainer.css.visibility='visible' 
    initialised=true; 
	divUpArrow=new ConstructObject('divUpControl') 
	divDownArrow=new ConstructObject('divDownControl') 
	divUpArrow.css.visibility='hidden' 
} 
// end absolutely positioned scrollable area object scripts 

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; 
  for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) {
	x.src=x.oSrc;
  }
  CeaseScroll();
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  	var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; 
  	for(i=0;i<(a.length-2);i+=3)
		if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
	if (a[0]=='Image2') PerformScroll(7);
	else PerformScroll(-7);
}
</SCRIPT>


</head>



<body link="#BB0000" vlink="#BB0000" alink="#BB0000" leftmargin="0" topmargin="0" onLoad="InitialiseScrollableArea()">

				<table width="400" border="0" cellspacing="0" cellpadding="0">

  <tr> 

    <td width="400">

<script language="javascript">

<!--

	var flashDetection = new FlashDetection();

	if (!flashDetection.isMinimumVersion(5))  {

		document.write("<img src=\"gif/temp_mods.gif\" width=\"400\" height=\"400\" border=\"0\">");

	}

	else {

		theDudeAbidesMods();
	}

-->

</script>

	</td>


    <td valign="top"><br><img height="13" width="38" src="images/headline_mods.gif"></td></tr></table>


<!-- end absolutely positioned scrollable area object --> 
</body>
<!-- begin absolutely positioned scrollable area object--> 
<div id="divUpControl" align="center" style="visibility:hidden;"> <a href="javascript:;" onMouseOver="MM_swapImage('Image1','','images/scrollup_r.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/scrollup.gif" width="400" height="11" alt="" border="0" name="Image1"></a></div>
<div id="divDownControl" align="center"> <a href="javascript:;" onMouseOver="MM_swapImage('Image2','','images/scrolldown_r.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/scrolldown.gif" width="400" height="11" alt="" border="0" name="Image2"></a></div>
<div id="divContainer"> 
  <div id="divContent">
      <table width="400" border="0" cellspacing="0" cellpadding="0">
        <tr width="200"> 
          <td> <font size="1" face="Tahoma, Arial, Helvetica"><strong>MAX PAYNE 2
            MOD INFO</strong><br>
            <br>
            Max Payne 2 lets you easily play user-made maps and content modifications, 'mods'. Some mods might modify the original game to give Max new weapons, new skills or a new perspective. Others might introduce a completely new surroundings and characters. To find and download mods, please visit the following fan sites: 
<br><br>
          <a href="http://www.paynereactor.com" target="_blank">Payne Reactor</a><br>
          <a href="http://www.planetmaxpayne.com" target="_blank">Deep Six</a><br>
		  <a href="http://www.mp2mods.com" target="_blank">Max Payne 2 Mods</a><br>		  
          <a href="http://www.mpzone.de" target="_blank">Max Payne Zone</a> (German)<br>
          <a href="http://www.maxpaynearea.de" target="_blank">Max Payne Area</a> 
          (German) <br><br>
After downloading a mod, just place the file (modname.mp2m) in the Max Payne 2 game folder. Start the game, and you can select the mod from the "Choose Customized Game" pop-up list in the startup screen. To enable original Max Payne 2 again, just select "none" from the pop-up list.  Please note: mods for the original Max Payne are not compatible with Max Payne 2.
<br><br>
            <strong>MOD CREATION</strong><br>
            <br>
For those interested in creating their own mods, download and install the modification tools below. A readme file is included with the executable to help get you started. Please also visit the fan sites to find user-made tutorials and tips.
<br><br>        
          <strong>Click <a href="mods/MaxPayne2Tools.zip">here</a> 
          to download the modification tools. (22 MB)</strong>
<br><br>
<strong>Click <a href="mods/MP2_tutorials_v0.7.zip">here</a> to download the current release (v0.7) of the official tutorial<br>(16 MB), or view it online <a href="mods/tutorials/index.html" target="_blank">here</a>.</strong>
<br><br>
Please note: this is the first release of the tutorials.  They will be updated periodically, so check this site regularly for the latest revisions and additions.		  
<br><br>
The first batch of level source files for use with the modification tools is now available.  View the enclosed <a href="mods/examplelevels_readme.txt" target="_blank">readme</a> file for a description of what files are included.
<br><br>
<strong>Download the level source files <a href="mods/Example_levels_001.zip">here</a>. (31 MB)</strong>
<br><br>
            <strong>FORUMS</strong><br>
            <br>
Questions? Problems? Something to say? To discuss Max Payne 
          2, Max Payne 2 editing, mods, technical issues or pretty much anything 
          about Max Payne 2, visit the forums at <a href="http://www.3drealms.com/forums.html" target="_blank">3DRealms</a> or <a href="http://www.forumplanet.com/3dactionplanet/maxpayne/" target="_blank">Deep 
          Six</a>. There you will find thousands of messages relating 
          to all facets of Max Payne 2.</font></td>
        </tr>
      </table>

</div></div>
</html>


