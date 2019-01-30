<?php include 'Config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'lib/Session.php'; ?>

<?php 
  $db = new Database();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to BRB Homes Ltd.</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/style_sheet.css" rel="stylesheet" type="text/css" />
<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/new.css" />
<script language="JavaScript" type="text/javascript" src="validation.js"></script>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="script/jquery.nivo.slider.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:2000,
		startSlide:0, // Set starting Slide (0 index)
		directionNav: false, // Next and Prev
		directionNavHide:false, // Only show on hover
		controlNav:false, // 1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
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
//-->
</script>
<link rel="shortcut icon" href="images/favicon.ico">
</head>

<body onload="MM_preloadImages('images/b-6-hover.jpg','images/b-7-hover.jpg','images/b-1-hover.jpg','images/b-2-hover.jpg','images/b-3-hover.jpg','images/b-4-hover.jpg','images/b-5-hover.jpg')">
<table width="940" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td><img src="images/banner_top.jpg" width="940" height="9" /></td>
  </tr>
  <tr style="background: #D6E3D5;">
    <td><table width="940" border="0" cellspacing="0" cellpadding="0">
      <tr >
        <td><a href="index.php"><img src="images/bbbbbbb.png" width="632" height="117" border="0" alt="logo" /></a></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            
             <td  style="width: 70px;text-align: center;background: #2E3192;color: #fff; border-right: 1px solid #fff;height: 25px; font-weight: bold;">MEMBER</td><td  style="width: 70px;text-align: center;background: #ED1C24;color: #fff;height: 25px; font-weight: bold;">REHAB</td>
            
          </tr>
          <tr style="height: 5px;"></tr>
          <tr>
            <td  style="width: 70px;text-align: center;background: #2E3192;color: #fff; border-right: 1px solid #fff;height: 25px; font-weight: bold;">CANTTBOARD</td><td  style="width: 70px;text-align: center;background: #ED1C24;color: #fff;height: 25px; font-weight: bold;">ENLISTED</td>
          </tr>
          
          
        </table></td>
      </tr>
    </table>
    <table style="float: right; "><tr >
            <td style="width: 140px;text-align: center;  background: #D6E3D5;color: #ED1C24; height: 50px; font-size: 14px; font-weight: bold; padding: 0 40px;border-radius: 20px 0px 20px 0;">HotLine: 01811485479-80</td>
            <tr style="height: 5px;"></tr>
            </tr></table>
    </td>
  </tr>

  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="menu"><a href="index.php">Home</td>
        <td class="menu"><a href="about.php">About us</td>
        <td class="menu"><a href="management.php">Management</td>
        <td class="menu"><a href="massage.php">Message</td>
        <td id="photo"><a href="photogallary.php">Photo Gallary</td>
        <td class="menu"><a href="career.php">Career</td>
        <td class="menu" id="menu"><a href="contact.php">Contact us</td>

      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/line.jpg" /></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF"><!--<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="927" height="266">
      <param name="movie" value="swf/banner.swf" />
      <param name="quality" value="high" />
      <embed src="swf/banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="927" height="266"></embed>
    </object>-->
	 
	
