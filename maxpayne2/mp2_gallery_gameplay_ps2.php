
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<!--rockstararchive script-->
<script type="text/javascript" src="https://rockstar-archive.h0rizon.dev/webarchive/js/rgPatcher.js"></script>
<!--rockstararchive script-->

<title>Rockstar Games Presents Max Payne 2: The Fall of Max Payne</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
#divUpControl{position:absolute; width:400; left:20; top:0; z-index:1;} 
#divDownControl{position:absolute; width:400; left:20; top:290; z-index:1;} 
#divContainer{position:absolute; width:400; height:281; overflow:hidden; top:10; left:20; clip:rect(0,400,281,0); visibility:hidden} 
#divContent{position:absolute; top:0; left:0;font-size:11px;font-family:Verdana;line-height:18px;text-align:justify;}
</style>
<SCRIPT LANGUAGE = "javascript">
<!--

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
	if (a[0]=='Image2') { PerformScroll(7);
	}

	else PerformScroll(-7);
}

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

function launchtrailer(url,width,height) {
	window.open (url, "_blank", "width="+width+", height="+height+", location=0, menubar=0, resizable=0, scrollbars=0, status=0, titlebar=0, toolbar=0");
	// Stop background sound in navigation window
	parent.parent.navFrame.stopmovie();	
}

//-->
</script>
</head>

<body leftmargin="10" marginwidth="10" topmargin="0" marginheight="0" onLoad="InitialiseScrollableArea()">
</body>
<!-- begin absolutely positioned scrollable area object--> 
<div id="divUpControl" style="visibility:hidden;"> <a href="javascript:;" onMouseOver="MM_swapImage('Image1','','images/scrollup_r.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/scrollup.gif" width="400" height="11" alt="" border="0" name="Image1"></a></div>
<div id="divDownControl" > <a href="javascript:;" onMouseOver="MM_swapImage('Image2','','images/scrolldown_r.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/scrolldown.gif" width="400" height="11" alt="" border="0" name="Image2"></a></div>

<div id="divContainer"> 
  <div id="divContent">
<table width="416" border="0" align="left" cellpadding="2" cellspacing="0">
  <tr> 
    <td height="18"><strong><font size="1" face="Tahoma, Arial, Helvetica">GAMEPLAY MOVIE CLIPS </font></strong></td>
  </tr>
  <tr>
    <td height="14"><img src="images/spacer.gif" width="10" height="10"></td>
  </tr>
  <tr>
    <td height="18"><font size="1" face="Tahoma, Arial, Helvetica">SET 1</font></td>
  </tr>
  <tr>
    <td height="22"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="26%" valign="bottom"><img src="images/gameclip_ps2_thumb.jpg"></td>
        <td width="74%" valign="top"><table  border="0" cellspacing="1" cellpadding="4">
            <tr>
              <td colspan="3"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="mpfont"><font size="1"><Strong>QuickTime</STRONG></font></span><font size="1"><strong> - 320x240 </strong></font></font></td>
            </tr>
            <tr>
              <td nowrap bgcolor="#000000" class="mpfont"><strong><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip1_low.html','320','258')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 1</font></a></strong></td>
              <td bgcolor="#000000"><strong><span class="mpfont"><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip2_low.html','427','258')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 2</font></a></span></strong></td>
              <td bgcolor="#000000"><strong><span class="mpfont"><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip3_low.html','320','258')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 3</font></a></span></strong></td>
            </tr>
			<tr><td colspan="3"></td></tr>
			<tr><td colspan="3"></td></tr>			
         </table></td>
      </tr>
    </table></td>
  </tr>
    <tr>
    <td height="18"><font size="1" face="Tahoma, Arial, Helvetica">SET 2</font></td>
  </tr>
  <tr>
    <td height="22"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="26%" valign="bottom"><img src="images/gameclip_ps2_thumb2.jpg"></td>
        <td width="74%" valign="top"><table  border="0" cellspacing="1" cellpadding="4">
            <tr>
              <td colspan="3"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="mpfont"><font size="1"><Strong>QuickTime</STRONG></font></span><font size="1"><strong> - 320x240 </strong></font></font></td>
            </tr>
            <tr>
              <td nowrap bgcolor="#000000" class="mpfont"><strong><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip4_low.html','320','258')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 4</font></a></strong></td>
              <td bgcolor="#000000"><strong><span class="mpfont"><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip5_low.html','320','258')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 5</font></a></span></strong></td>
              <td bgcolor="#000000"><strong><span class="mpfont"><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip6_low.html','320','258')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 6</font></a></span></strong></td>
              <td bgcolor="#000000"><strong><span class="mpfont"><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip7_low.html','320','258')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 7</font></a></span></strong></td>
              <td bgcolor="#000000"><strong><span class="mpfont"><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip8_low.html','320','258')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 8</font></a></span></strong></td>			  
            </tr>
			<tr><td colspan="3"></td></tr>
			<tr><td colspan="3"></td></tr>			
         </table></td>
      </tr>
    </table></td>
  </tr>
    <tr>
    <td height="18"><font size="1" face="Tahoma, Arial, Helvetica">SET 3</font></td>
  </tr>
  <tr>
    <td height="22"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="26%" valign="bottom"><img src="images/gameclip_ps2_thumb3.jpg"></td>
        <td width="74%" valign="top"><table  border="0" cellspacing="1" cellpadding="4">
            <tr>
              <td colspan="3"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="mpfont"><font size="1"><Strong>QuickTime</STRONG></font></span><font size="1"><strong> - 320x240 </strong></font></font></td>
            </tr>
            <tr>
              <td nowrap bgcolor="#000000" class="mpfont"><strong><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip9_low.html','480','285')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 9</font></a></strong></td>
              <td bgcolor="#000000"><strong><span class="mpfont"><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip10_low.html','320','258')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 10</font></a></span></strong></td>
              <td bgcolor="#000000"><strong><span class="mpfont"><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip11_low.html','320','258')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 11</font></a></span></strong></td>
              <td bgcolor="#000000"><strong><span class="mpfont"><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip12_low.html','320','258')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 12</font></a></span></strong></td>
              <td bgcolor="#000000"><strong><span class="mpfont"><a style="color:#FFFFFF" href="javascript:launchtrailer('trailer/ps2/trailer_clip13_low.html','480','285')"><font size="1" face="Tahoma, Arial, Helvetica">Clip 13</font></a></span></strong></td>			  
            </tr>
			<tr><td colspan="3"></td></tr>
			<tr><td colspan="3"></td></tr>			
         </table></td>
      </tr>
    </table></td>
  </tr>  
  <tr> 
    <td><p><br>
        <font size="1" face="Tahoma, Arial, Helvetica">Download gameplay clips 
        1-3:<br>
        - <a style="color:#BB0000" href="trailer/ps2/Max2-GamePlay-Clips1-3_ps2.zip">QuickTime format</a> (55MB).
        <br><br><font size="1" face="Tahoma, Arial, Helvetica">Download gameplay clips 
        4-8:<br>
        - <a style="color:#BB0000" href="trailer/ps2/Max2-GamePlay-Clips4-8_ps2.zip">QuickTime format</a> (32MB).
	    <br><br><font size="1" face="Tahoma, Arial, Helvetica">Download gameplay clips 
        9-13:<br>
        - <a style="color:#BB0000" href="trailer/ps2/Max2-GamePlay-Clips9-13_ps2.zip">QuickTime format</a> (16MB).
		</font>
	</td>
  </tr>
</table>
</body>
</div>
</div>
<!-- end absolutely positioned scrollable area object --> 
</html>

