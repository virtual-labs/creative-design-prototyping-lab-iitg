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
.style30 {	font-size: 30px;
	font-weight: bold;
	color: #663300;
}
.style33 {color: #000000}
.style38 {font-size: 16; color: #000000; }
.style40 {
	font-size: 14px;
	font-weight: bold;
	color: #000000;
}
.style42 {font-size: 28px; font-weight: bold; color: #663300; }
.style45 {font-size: 16px; color: #000000; }
.style46 {
	font-size: 16;
	font-weight: bold;
	color: #663300;
}
.style47 {font-size: 16px; font-weight: bold; color: #663300; }
.style48 {color: #000099}
#apDiv1 {
	position:absolute;
	width:600px;
	height:32px;
	z-index:1;
	left: 49px;
	top: 20px;
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
<div class="style48" style="position: relative; margin:auto; width: 1024px; background-color:#e3f2fc"><br/>
  <span class="title">Creative design, prototyping & experiential simulation lab </span></div>
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
<div id="apDiv1"><span class="style42">What is Human Computer Interaction (HCI) ? </span></div>
<p align="justify" class="style42">&nbsp;</p>
<p align="justify" class="style45">Human-computer interaction is a discipline   concerned with the design, evaluation and   implementation of interactive computing systems for   human use and with the study of major phenomena   surrounding them.</p>
<p class="style45">&nbsp;</p>
<p align="justify" class="style45">Because human-computer interaction studies a human and a machine in   conjunction, it draws from supporting knowledge on both the machine and   the human side. On the machine side, techniques in computer graphics, operating systems, programming languages, and development environments are relevant. On the human side, communication theory, graphic and industrial design disciplines, linguistics, social sciences, cognitive psychology, and human factors are relevant. Engineering and design methods are also relevant. Due to   the multidisciplinary nature of HCI, people with different backgrounds   contribute to its success. HCI is also sometimes referred to as <strong>man&ndash;machine interaction (MMI)</strong> or <strong>computer&ndash;human interaction (CHI)</strong>. </p>
<p>&nbsp;</p>
<p class="style40">&nbsp;</p>
<p align="justify" class="style30"><img src="images/HCI.gif" alt="hci" width="921" height="583"></p>
<p align="justify" class="style30"></p>
<p align="justify" class="style33">&nbsp; </p>
<p align="justify" class="style33">&nbsp;</p>
<p align="justify" class="style45">Computer systems exist within a larger social,   organizational and work milieu (U1). Within this   context there are applications for which we wish   to employ computer systems (U2). But the process   of putting computers to work means that the   human, technical, and work aspects of the   application situation must be brought into fit   with each other through human learning, system   tailorability, or other strategies (U3). In   addition to the use and social context of   computers, on the human side we must also take   into account the human information processing   (H1), communication (H2), and physical (H3)   characteristics of users. On the computer side,   a variety of technologies have been developed   for supporting interaction with humans: Input   and output devices connect the human and the   machine (C1). These are used in a number of   techniques for organizing a dialogue (C2). These   techniques are used in turn to implement larger   design elements, such as the metaphor of the   interface (C3). Getting deeper into the machine   substrata supporting the dialogue, the dialogue   may make extensive use of computer graphics   techniques (C4).</p>
<p align="justify" class="style47">&nbsp;</p>
<p align="justify" class="style45">Complex dialogues lead into considerations of   the systems architecture necessary to support   such features as interconnectable application   programs, windowing, real-time response, network   communications, multi-user and cooperative   interfaces, and multi-tasking of dialogue   objects (C5). Finally, there is the process of   development which incorporates design (D1) for   human-computer dialogues, techniques and tools   (D2) for implementing them (D2), techniques for   evaluating (D3) them, and a number of classic   designs for study (D4). Each of these components   of the development process is bound up with the   others in a relationship of  mutual, reciprocal influence whereby choices   made in one area impact upon the choices and the   options available in the others. </p>
<p align="justify" class="style46">&nbsp;</p>
<p align="justify" class="style46">&nbsp;</p>
<p align="justify" class="style30">What is Usability Engineering (UE) ? </p>
<p align="justify" class="style30">&nbsp;</p>
<p align="justify" class="style45"><strong>Usability engineering</strong> is a field that is concerned generally with human-computer interaction and   specifically with making human-computer interfaces that have high usability or user friendliness. In   effect, a user-friendly interface is one that allows users to effectively and   efficiently accomplish the tasks for which it was designed and one that users   rate positively on opinion or emotional scales. Assessing the usability of an   interface and recommending ways to improve it is the purview of the Usability   Engineer. The largest subsets of Usability Engineers work to improve usability   of software graphical   user interfaces (GUIs), web-based user interfaces, and voice user   interfaces (VUIs).</p>
<p align="left" class="style45">&nbsp;</p>
<p align="justify" class="style45">Several broad disciplines including Psychology, Human Factors and Cognitive Science subsume usability engineering, but the theoretical foundations of the field come   from more specific domains: human perception and action; human cognition;   behavioral research methodologies; and, to a lesser extent, quantitative and   statistical analysis techniques<em>.</em> When usability engineering began to emerge as a distinct area of professional   practice in the mid- to late 1980s, many usability engineers had a background in Computer Science or in a sub-field of Psychology such as Perception, Cognition or Human Factors. Today, these   academic areas still serve as springboards for the professional practitioner of   usability engineering, but Cognitive Science departments and academic programs   in Human-Computer Interaction now also produce their share of practitioners in   the field.</p>
<p align="left" class="style45">&nbsp;</p>
<p align="justify" class="style45">The term <strong>usability engineering</strong> (in contrast to interaction   design and user experience design) implies more of   a focus on assessing and making recommendations to improve usability than it   does on design, though Usability Engineers may still engage in design to some   extent, particularly design of wire-frames or other prototypes.</p>
<p align="justify" class="style45">&nbsp;</p>
<p align="justify" class="style45">&nbsp;</p>
<div align="justify" class="style38"><br>
  </p>
</div>
  </div>
</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#0e8de0"><img src="images/footer-curve.jpg" width="1024" height="31" alt=""><div class="copyright">Copyright &copy; 2009-2010</div><br>
</div>


</body>
</html>
