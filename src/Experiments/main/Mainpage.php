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
.style8 {font-family: Arial, Helvetica, sans-serif}
.style11 {
	color: #990000;
	font-weight: bold;
	font-size: 18px;
}
.style15 {
	color: #000099;
	font-family: Arial, Helvetica, sans-serif;
}
.style45 {font-size: 16px; color: #000000; }
.style20 {
	color: #000000;
	font-size: 16px;
}
.style47 {
	font-size: 24px;
	color: #990000;
	font-weight: bold;
}
.style58 {font-size: 16px}
.style60 {color: #000099; font-weight: bold; font-size: 18px; }
#apDiv1 {
	position:absolute;
	width:385px;
	height:24px;
	z-index:1;
	left: 53px;
	top: 23px;
}
.style62 {font-size: 24px; color: #CD5012; font-weight: bold; }
.style64 {font-size: 16px; color: #0000FF; }
.style65 {
	font-size: 14px
}
.style66 {color: #006600}
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

  </ul>

         </div>
<div class="style15 style8" style="position: relative; margin:auto; width: 1024px; background-color:#e3f2fc"><br/>
  <span class="title">Creative Design, Prototyping & Experiential Simulation Laboratory</span></div>
<div id="no_print">

</div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:400px;">
        <div class="style8" id="contentBox" style=" padding:0px; padding-left:50px; padding-right:50px;">



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




   

          <p>
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
  </p>
          <div id="apDiv1"><span class="style62">Welcome to our laboratory </span></div>
          <p><br>
          </p>
          <p class="style47">&nbsp;</p>
          <h1 class="style45 style58">The  experiments under this laboratory belong to  the discipline of <strong>Creative Design</strong> which concerns itself &nbsp;with a user centred product innovation. &nbsp;</h1>
          <h1 class="style20">&nbsp;</h1>
          <h1 class="style45"> The experiments are in the specific &nbsp;area of <b style="color: #CD5012;">Human Computer Interactions (HCI)</b> &nbsp;- a specialisation of interest to Computer  Science, Electronics, Information Technology &nbsp;and Design students both at the Under graduate  level as well as Postgraduate level.</h1>
          <h1 class="style45"><br>
  Experiments  focus on understanding the theoretical basis of decision making while designing  computer screens, displays and product  interfaces.&nbsp; Usability parameters &nbsp;&nbsp;along with Visual Quality are the measures of  differentiation between a good User Interface (GUI) and an inefficiently designed one. &nbsp;These experiments aim to make the students  understand&nbsp; some of the&nbsp; underlying theory &nbsp;of designing user centric yet functional and  logical interactions in products both hardware and &nbsp;software. </h1>
          <h1 class="style45"><br>
  The first set of experiments&nbsp; are aimed at understanding&nbsp; Laws of interaction such as Fitts'&nbsp; and Hick's laws that are useful in explaining  human interactive&nbsp; behaviour and the  resulting designing heuristics for display screens.&nbsp; </h1>
          <h1 class="style45"><br>
  Second set of experiments deal with  Visual aspects such as aesthetics, colour form &amp; grids which define the  layout of content on GUIs.</h1>
          <h1 class="style45"><br>
  The third set of experiments provides an  experience of designing control panels of instruments and products by  configuring virtual prototypes of the panels.&nbsp; </h1>
          <p class="style45">&nbsp;</p>
          <p class="style45">The fourth set of experiments help understand the metrics of measuring useability aspects.</p>
          <h1 class="style45"><br>
  This laboratory is an introductory  experience to&nbsp;&nbsp; Designing issues in both  software and hardware product interfaces . It will be of interest to  undergraduate and postgraduate level students in multiple disciplines such as but  not limited to Computer Science, Information Technology and Innovation /  Interaction &nbsp;&nbsp;Design (ID). &nbsp;The experiments form integral part of  curriculum in courses such as Usability Engineering, Interaction Design and HCI  &nbsp;in the Creative Design discipline. To know more about HCI and UE discipline click the link below.</h1>
          <h1 align="justify" class="style1">&nbsp;</h1>
          <p class="style11"><span class="style64"><a href="MainExp.php">Click on this link to proceed to  EXPERIMENTS</a></span></p>
          <p class="style60">&nbsp;</p>
          <p class="style60 style65">Click on this link to know more about Human Computer Interaction(HCI) and Useability Engineering(UE) <span class="style66">( Under construction )</span></p>
  </div>
</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#0e8de0"><img src="images/footer-curve.jpg" width="1024" height="31" alt=""><div class="copyright">Copyright &copy; 2009-2010</div><br>
</div>


</body>
</html>
