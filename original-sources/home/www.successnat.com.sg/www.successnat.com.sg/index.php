<html>
<head>
<title>SUCCESS.NAT-Success Is Not All Talent - Tutorial Centre</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


<link href="gallery/main.css" type="text/css" rel="stylesheet" />
<link href="main.css" type="text/css" rel="stylesheet" />
<script src="gallery/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="gallery/jquery.exposure.js?v=1.0" type="text/javascript"></script>

<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}


$(function(){
				var gallery = $('#images');
				gallery.exposure({
					visiblePages : 1,
					slideshowDelay: 3000,
					autostartSlideshow:true,
					onSlideshowPaused:function(thumb){
						this.playSlideshow();
					}
					,
					onThumb : function(thumb) {
						var li = thumb.parents('li');				
						var fadeTo = li.hasClass($.exposure.activeThumbClass) ? 1 : 0.3;
						
						thumb.css({display : 'none', opacity : fadeTo}).stop().fadeIn(200);
						
						thumb.hover(function() { 
							thumb.fadeTo('fast',1); 
						}, function() { 
							li.not('.' + $.exposure.activeThumbClass).children('img').fadeTo('fast', 0.3); 
						});
					},
					onImage : function(image, imageData, thumb) {
						// Fade out the previous image.
						image.siblings('.' + $.exposure.lastImageClass).stop().fadeOut(500, function() {
							$(this).remove();
						});
						
						// Fade in the current image.
						image.hide().stop().fadeIn(1000);

						// Fade in selected thumbnail (and fade out others).
						if (gallery.showThumbs && thumb && thumb.length) {
							thumb.parents('li').siblings().children('img.' + $.exposure.selectedImageClass).stop().fadeTo(200, 0.3, function() { 			$(this).removeClass($.exposure.selectedImageClass); });			
							thumb.fadeTo('fast', 1).addClass($.exposure.selectedImageClass);
						}
					},
					onPageChanged : function() {
						// Fade in thumbnails on current page.
						gallery.find('li.' + $.exposure.currentThumbClass).hide().stop().fadeIn('fast');
					}
				});
			});
</script>

<style>
span{
font-family:arial;
font-size:12px;	
font-weight:bold;
}
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/navhomeclick.png','images/navaboutusclick.png','images/navclassesclick.png','images/navgethereclick.png','images/navcontactclick.png','images/navgalleryclick.png')">

<div align="center">
<table width="789" border="0" cellpadding="0" cellspacing="0" align="center">

<tr><td colspan="8"><img src="images/sucessnatbg.png" width="789" height="6"></td></tr>
	
<tr><td colspan="8"><img src="images/sucessnatMOE.png" width="789" height="27"></td></tr>
	
<tr><td colspan="8"><img src="images/snbanner.png" width="789" height="120"></td></tr>

<tr>
<td><img src="images/leftborder.png" width="16" height="38"></td>

<td>
<a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('navhome','','images/navhomeclick.png',1)">
<img src="images/navhome.png" alt="Go to Main page" name="navhome" width="127" height="33" border="0">
</a>
</td>

<td><a href="aboutus.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('navabout','','images/navaboutusclick.png',1)">
<img src="images/navaboutus.png" alt="About Success" name="navabout" width="125" height="33" border="0"">
</a>
</td>

<td>
<a href="classes.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('navclass','','images/navclassesclick.png',1)">
<img src="images/navclasses.png" alt="Classes" name="navclass" width="127" height="33" border="0">
</a>
</td>
		
<td>
<a href="location.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('navghere','','images/navgethereclick.png',1)">
<img src="images/navgethere.png" alt="How to find Us" name="navghere" width="125" height="33" border="0">
</a>
</td>

<td>
<a href="gallery.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('navgallery','','images/navgalleryclick.png',1)">
<img src="images/navgallery.png" alt="Gallery" name="navgallery" width="126" height="33" border="0">
</a>
</td>

<td>
<a href="contact.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('navcontact','','images/navcontactclick.png',1)">
<img src="images/navcontact.png" alt="Contact Us" name="navcontact" width="128" height="33" border="0">
</a>
</td>
<td><img src="images/rightborder.png" width="15" height="38"></td>
</tr>
</table>

<table width="789" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td style="background-image: url(images/leftborder.png);" width="16">&nbsp;</td>
    
    <td width="758">
    
    		<div id="main">
            <div id="exposure"></div>	
            <div class="clear"></div>
			<div class="panel">
				<ul id="images">
					<li><a href="gallery/slides/snat1.jpg"><img src="gallery/thumbs/snat1.jpg"></a></li>
					<li><a href="gallery/slides/snat2.jpg"><img src="gallery/thumbs/snat2.jpg"></a></li>
                    <li><a href="gallery/slides/snat3.jpg"><img src="gallery/thumbs/snat3.jpg"></a></li>
                    <li><a href="gallery/slides/snat4.jpg"><img src="gallery/thumbs/snat4.jpg"></a></li>
				</ul>
			</div>
		</div>
    
    <div style="clear:both"></div>
    <br>
    
        <table width="758" height="180" cellpadding="6" cellspacing="0">
        <tr>
        <td style="border-right:3px solid #E5E5E5;" width="253">
        <!--<img src="images/homeheaders/homeheaders_01.png"><br><br>-->
        <font color="#6BB7F7" size="4" face="Arial">What We Do</font><br><br>
        <span style="text-align:left">Need help with your school work?
		Is your child not doing well for his
		or her exam? Success.NAT tutorial
		centre is here to help!</span>
		<br><br>
		<font color="#6BB7F7" size="4" face="Arial">Online Learning System</font><br><br>
		<span style="text-align:left">
		Click <a href="http://successnat.com.sg/onlinelearningsystem/students">here</a> to access our Online Learning System !</span><br><br>
        </td>
        
        <td style="border-right:3px solid #E5E5E5;" width="253">
        
	<font color="#6BB7F7" size="4" face="Arial"> Success.Nat Exam Papers</font><br>
	<font color="red" size="1">New updates!</font><br><br>
	<span style="text-align:left">Past Year Exam Papers for Primary 1 from Success.Nat Now On Sale!<br><br> Click <a href="http://successnat.edu.sg/exampapers.html">Here</a> To See List Of Available Exam Papers!</span><br><br>
        </td>
        
        <td width="252">
        <font color="#6BB7F7" size="4" face="Arial">Our Classes & Schedules</font><br><br>
         <!--<img src="images/homeheaders/homeheaders_02.png"><br><br>-->
        <span style="text-align:left">Click <a href="classes.php">here</a> to view the updated list of classes available.;</span><br><br>
        <font color="#6BB7F7" size="4" face="Arial">Opening Hours and Location:</font><br><br>
        <!--<img src="images/homeheaders/homeheaders_03.png"><br><br>-->
        <span style="text-align:left">
        2pm to 10pm (Mon - Fri)<br>
        9am to 5pm (Sat - Sun)<br>
		*inclusive of public holidays

        </span>
        </td>
        </tr>
        </table>
    </td>
    
    <td style="background-image: url(images/rightborder.png);" width="15"></td>
  </tr>
  
 <tr height="30">
<td><img src="images/leftborder.png" width="16" height="30"></td>
<td style="vertical-align:bottom">
<center>
<span style="font-family:calibri;font-size:13pt;color:#0099FF">
<img src="images/homeheaders/centre.jpg"></span>
</center>
</td>
<td><img src="images/rightborder.png" width="15" height="30"></td>
</tr>
  
  
  <tr>
    <td colspan="3"><img src="images/sucessnatbgfooter.png" width="789" height="11"></td>
  </tr>

  <tr>
    <td colspan="3" height="50" style="background-color:#E5E5E5;color:#959595;vertical-align:middle;font-size:11pt">
    <center>
    <a href="index.php">Home<a> | <a href="aboutus.php">About Us</a> | 
    <a href="classes.php">Classes</a> | <a href="location.php">Getting here</a> | 
    <a href="gallery.php">Gallery</a> | <a href="http://successnat.com.sg/onlinelearningsystem/students">Online Learning System</a> | <a href="contact.php">Contact Us</a> <br>
    Copyright &copy Success.Nat Tutorial Centre. All rights reserved.
    </center>
    </td>
  </tr>
</table>
</div>

</body>
</html>