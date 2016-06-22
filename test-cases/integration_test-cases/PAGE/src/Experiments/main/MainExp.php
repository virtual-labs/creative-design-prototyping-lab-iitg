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
.style38 {font-size: 16; color: #000000; }
.style42 {font-size: 28px; font-weight: bold; color: #663300; }
.style45 {font-size: 16px; color: #000000; }
.style18 {color: #0000FF}
.style19 {color: #0000CC}
.style20 {color: #000000; font-size: 14px;}
.style51 {font-size: 16px}
.style54 {color: #000099}
.style56 {font-size: 14px}
.style57 {font-size: 18px; font-weight: bold; color: #CD5012; }
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
<div class="style54" style="position: relative; margin:auto; width: 1024px; background-color:#e3f2fc"><br/>
<span class="title">Creative Design, Prototyping & Experiential Simulation Laboratory</span></div>
<div id="no_print">

</div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:400px;">
        <div id="contentBox" style=" padding:0px; padding-left:50px; padding-right:50px;">
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
<p align="justify" class="style42" style="color: #012943;">Experiments <span class="style56">( Click on the hyperlinks below to proceed  to specific  experiment )</span></p>
<p></p>
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="809" valign="top"><p class="style57">Human Computer Interaction (HCI)</p></td>
    </tr>
  <tr>
    <td width="809" height="106" valign="top"><p class="style38"><span class="style51">1. <a href="../exp1/view2.php?link=T001" class="style18">Serial Position Effect</a></span></p>
      <p class="style45">2. <a href="../exp5/view2.php?link=T001" class="link style18">Fitts's Law</a></p>
      <p class="style45">3. <a href="../exp7/view2.php?link=T001" class="style18">Hick&ndash;Hyman's Law</a><span class="style19"><br>
      </span>4. <!--a href="../exp3/view2.php?link=T0013" class="style18"-->Sensitivity and errors due to input<!--/a--> <span  style="color: #CD5012;">( Under construction )</span></p>
      <p class="style45">5. <!--a href="../exp2/view2.php?link=T0012" class="style18"-->Webbers Law<!--/a--> <span  style="color: #CD5012;">( Under construction )</span></p>
      <p class="style45">6. <a href="../exp8/view2.php?link=T001" class="style18">G.O.M.S Tool</a></p>
      <h1 class="style45">&nbsp;</h1></td>
    </tr>
  <tr>
    <td valign="top"><span class="style57">Visual Communication</span></td>
    </tr>
  <tr>
    <td height="89" valign="top"><p class="style45">7. &nbsp;&nbsp;<!--a href="../exp9/view2.php?link=T001" class="link style18"-->Color Theory<!--/a--></p>
      <p class="style45">8. &nbsp;&nbsp;<span class="style56"><span class="style51">Specifying colours of an interface</span></span></p>
      <p class="style45">9. &nbsp;&nbsp;<span class="style51">Specifying fonts and typography</span><span class="style51"></span></p>
      <p class="style38"><span class="style51">10. <!--a href="../exp4/view2.php?link=T001" class="style18"-->Influence  of directionality in determining locations of interactive elements on the screen<!--/a--></span> <span class="style45">( Under construction )</span></p>
      <p class="style38">&nbsp;</p></td>
    </tr>
  <tr>
    <td valign="top"><span class="style57">Prototyping</span></td>
    </tr>
  <tr>
    <td valign="top"><p class="style20"><span class="style51"><span class="style1">11. <a href="../exp6/view2.php?link=T001" class="style18">Key configurations on &nbsp;mobile devices</a></span></span></p>
      <p class="style45">12. Prototyping the interface of a digital multimeter</p>
      <p class="style45">13. Lay out of control panel&nbsp; of photocopying&nbsp; machine</p>
      <p class="style45">14. User interface of a solid state power conditioning system</p>
      <p class="style20">&nbsp;</p></td>
    </tr>
  <tr>
    <td valign="top" class="style57">Useability Experience </td>
  </tr>
  <tr>
    <td valign="top"><p class="style45">15. User experience&nbsp;  evaluation scale <br>
      </p>
        <p class="style45">16. Software  application evaluation metrics for&nbsp;  advanced UI designers </p></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
</table>
<p align="justify" class="style42">&nbsp;</p>
</div>
</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#0e8de0"><img src="images/footer-curve.jpg" width="1024" height="31" alt=""><div class="copyright">Copyright &copy; 2009-2010</div><br>
</div>


</body>
</html>
