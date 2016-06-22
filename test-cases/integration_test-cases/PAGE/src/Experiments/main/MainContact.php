<?php
//$tabid = $_GET["link"];
?> 

<!DOCTYPE HTML>
<html>
<head>
<title>Virtual Labs - IIT Guwahati</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
-->
</style>
<style type="text/css">@import "css/flexnav.css";</style>
<script type="text/javascript" src="js/beethoven.js"></script>
<link href="css/default.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">




<script type="text/javascript" src="ddtabmenufiles/ddtabmenu.js">
</script>
<link rel="stylesheet" type="text/css" href="ddtabmenufiles/glowtabs.css" />




<style type="text/css">
<!--
.style1 {
	font-size: 16
}
.style42 {font-size: 28px; font-weight: bold; color: #00003A; }
.style48 {font-size: 18px}
.style53 {font-size: 18px; font-weight: bold; color: #663300; }
#apDiv {
	position:absolute;
	width:353px;
	height:30px;
	z-index:1;
	top: 323px;
	left: 50px;
}
#apDiv12 {	position:absolute;
	width:354px;
	height:57px;
	z-index:1;
	left: 86px;
	top: 377px;
}
#apDiv4 {	position:absolute;
	width:353px;
	height:30px;
	z-index:1;
	top: 303px;
	left: 88px;
}
#apDiv5 {	position:absolute;
	width:353px;
	height:30px;
	z-index:1;
	top: 215px;
	left: 88px;
}
#apDiv8 {	position:absolute;
	width:353px;
	height:30px;
	z-index:1;
	top: 451px;
	left: 86px;
}
#apDiv9 {	position:absolute;
	width:353px;
	height:30px;
	z-index:1;
	top: 527px;
	left: 87px;
}
.style56 {font-size: 18px; font-weight: bold; color: #FF6600; }
.style57 {font-size: 28px; font-weight: bold; color: #000099; }
.style59 {color: #000099; font-size: 18px;}
.style60 {
	color: #000099;
	font-size: 24px;
	font-weight: bold;
}
.style61 {color: #000099}
.style62 {color: #000000}
.style63 {font-size: 18px; font-weight: bold; color: #000000; }
#apDiv1 {
	position:absolute;
	width:99px;
	height:94px;
	z-index:1;
	left: 562px;
	top: 208px;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF">
<div id="header_main"><img src="" align="right" style="padding-right:20px"></div>
 <div id="no_print">
<!-- start header -->
<div id="header">
         <ul id="menuTop">
  <li><a href="Mainpage.php" target="_self">Home</a></li><li><a href="MainExp.php" target="_self">Experiments</a></li><li><a href="MainPeople.php" target="_self">People</a></li><li><a href="MainDown.php" target="_self">Downloads</a></li><li><a href="MainFeed.php" target="_self">Feedback</a></li><li><a href="MainContact.php" target="_self">Contact Us</a></li>         
         
</ul>

<?php
/*include_once("config.inc.php");
 global $db, $db_host, $db_user, $db_password;

$conn = mysql_connect($db_host,$db_user,$db_password);
 if (!$conn) {

  die("ERROR: " . mysql_error() . "\n");

 }
mysql_select_db ($db);
$stuff = mysql_query("SELECT * FROM `topmenu`") or die("MySQL Login Error: ".mysql_error()); 

if (mysql_num_rows($stuff) > 0) { 

$row=mysql_num_rows($stuff);

 

while($row = mysql_fetch_array($stuff))
  {
  $caption=$row['caption'];	
  $link=$row['link'];
	
echo "<li><a href=\"$link\" target=\"_self\">$caption</a></li>";
  }	

} */

?>

</div>
<div class="style61" style="position: relative; margin:auto; width: 1024px; background-color:#e3f2fc"><br/>
<span class="title">Creative Design, Prototyping & Experiential Simulation Laboratory</span></div>
<div id="no_print">

</div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:400px;">
        <div id="contentBox" style=" padding:0px; padding-left:50px; padding-right:50px;">



<br>
<div id="ddtabs2" class="glowingtabs">
<ul>
<?php
/* include_once("config.inc.php");
 global $db, $db_host, $db_user, $db_password;

//$cid =$_POST['cid'];
$course_id = "C001";
$cid = mysql_connect($db_host,$db_user,$db_password);
 if (!$cid) {

  die("ERROR: " . mysql_error() . "\n");

 }
mysql_select_db ("$db");
$stuff = mysql_query("SELECT * FROM `menu` WHERE cid='".$course_id."'") or die("MySQL Login Error: ".mysql_error()); 

if (mysql_num_rows($stuff) > 0) { 

$row=mysql_num_rows($stuff);

 

while($row = mysql_fetch_array($stuff))
  {
  $cap=$row['caption'];
  $tid=$row['tid'];	
  $pic=$row['icon'];
	
echo "<li><a href=\"view2.php?link=$tid\"><span><center><img src=\"images/$pic\" BORDER=0><br>$cap</center></span></a></li>\n";
  }	

} */

?>
</ul>
</div>




   

          <?php
/*include_once("config.inc.php");
 global $db, $db_host, $db_user, $db_password;

//$cid =$_POST['cid'];
$course_id = "C001";
$tab_id = $tabid;
$content_id = "CN001";
$cid = mysql_connect($db_host,$db_user,$db_password);
echo "<br><br>";
 if (!$cid) {

  die("ERROR: " . mysql_error() . "\n");

 }
mysql_select_db ("$db");
$stuff = mysql_query("SELECT * FROM `content` WHERE cid='".$course_id."' AND tid='".$tab_id."' ORDER BY srno ASC" ) or die("MySQL Login Error: ".mysql_error()); 

if (mysql_num_rows($stuff) > 0) { 

$row=mysql_num_rows($stuff);

 

while($row = mysql_fetch_array($stuff))
  {
  $title=$row['title'];
  $author=$row['author'];	
  $ptext=$row['posttext'];



			print("



		<h1 class=\"title\"><a href=\"#\">$title</a></h1>
				
				<div class=\"entry\">
					 <p>$ptext</p>
				</div>
			");




  }	

} */

?>

<br>
<p align="justify" class="style1">&nbsp;</p>
<p align="justify" class="style42">Contact Information </p>
<p align="justify" class="style42">&nbsp;</p>
<p align="justify" class="style57">Prof. Pradeep Yammiyavar <span class="style48">(Principal Investigator)</span></p>
<p align="left" class="style56 style62">Department Of Design</p>
<p align="left" class="style63"><img src="iitg_logo.png" alt="iitg" width="98" height="95"></p>
<p align="left" class="style63">Indian Institute Of Technology Guwahati </p>
<div id="apDiv1"></div>
<p align="left" class="style63">Guwahati , ASSAM (India)</p>
<p align="left" class="style53"></p>
<p align="left" class="style59">e-mail : pradeep@iitg.ernet.in</p>
<p align="left" class="style53">&nbsp;</p>
<p align="left" class="style53">&nbsp;</p>
<p align="left" class="style60">Yogesh Deshpande </p>
<p align="left" class="style63">Assistant Project Engineer</p>
<p align="left" class="style59">e-mail : d.deshpande@iitg.ernet.in</p>
<p align="left" class="style59">&nbsp;</p>
<p align="left" class="style53">&nbsp;</p>
<p align="left" class="style60">Rhiddhiman Patowary</p>
<p align="left" class="style63">Assistant Project Engineer</p>
<p align="left" class="style59">e-mail : rhiddhiman@iitg.ernet.in</p>
<p align="left" class="style59">&nbsp;</p>
  </div>
</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#0e8de0"><img src="images/footer-curve.jpg" width="1024" height="31" alt=""><div class="copyright">Copyright &copy; 2009-2010</div><br>
</div>


</body>
</html>
