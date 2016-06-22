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
		<link href="css/default.css" rel="stylesheet" type="text/css">
		<link href="css/custom.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="ddtabmenufiles/glowtabs.css" />

		<script type="text/javascript" src="js/beethoven.js"></script>
		<script type="text/javascript" src="ddtabmenufiles/ddtabmenu.js"></script>
		
		<style type="text/css">
		<!--
			.style1 {
				font-size: 16
			}
			.style30 {	font-size: 30px;
				font-weight: bold;
				color: #663300;
			}
			.style42 {font-size: 28px; font-weight: bold; color: #663300; }
			.style45 {font-size: 16px; color: #000000; }
			.style48 {color: #000099}
			textarea{
				font-family: Arial, Helvetica, sans-serif, Verdana;
				font-size: 16px;
				color: #000;
				background-color: aliceblue;
				border: 1px solid #000;
			}
			.input{
				width: 200px;
				height: 20px;
				font-family: Arial, Helvetica, sans-serif, Verdana;
				font-size: 14px;
				color: #000;
				background-color: aliceblue;
				border: 1px solid #000;
			}
			-->
		</style>
	</head>

	<body bgcolor="#FFFFFF">
		<div id="header_main">
        	<img src="" align="right" style="padding-right:20px">
        </div>
		<div id="no_print">
		<!-- start header -->
			<div id="header">
		        <ul id="menuTop">
					<li><a href="Mainpage.php" target="_self">Home</a></li>
                    <li><a href="MainExp.php" target="_self">Experiments</a></li>
                    <li><a href="MainPeople.php" target="_self">People</a></li>
                    <li><a href="MainDown.php" target="_self">Downloads</a></li>
                    <li><a href="MainFeed.php" target="_self">Feedback</a></li>
                    <li><a href="MainContact.php" target="_self">Contact Us</a></li>         
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
				
            <div class="style48" style="position: relative; margin:auto; width: 1024px; background-color:#e3f2fc"><span class="title">Creative Design, Prototyping & Experiential Simulation Laboratory</span></div>
				
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

					<div class="block">
					    		
                                
                                
                                <form action="feedout.php" method="post">
							      <p>
							        <!-- DO NOT change ANY of the php sections -->
							        <?php
									$ipi = getenv("REMOTE_ADDR");
									$httprefi = getenv ("HTTP_REFERER");
									$httpagenti = getenv ("HTTP_USER_AGENT");
								?>
								      <input type="hidden" name="ip" value="<?php echo $ipi ?>" />
								      <input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
								      <input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />
								      
								      
								      <!--<p>Send Data to: <select name="attn" size="1">
									<option value=" MT General Email ">General Email</option>
									//<option value=" MakeTemplate Owner "></option>
									//<option value=" Technical Support "></option>
									//<option value=" PHP Codemaster "></option>
									</select>-->
								      <br />
							      </p>
							      <p><center><b style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size: 20px; text-align: center; text-decoration:underline">Your valuable feedback on each experiment is requested</b></center></p>
							      <p><br /><br /><br />
						          </p>
				            <p>Name of the virtual lab: <b style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; color: #C30; font-size: 18px;">Creative Design, Prototyping and Experimental Simulation</b></p>
				            <p>&nbsp;</p>
				            <p>1. <b>Title of the experiment you performed:</b>
                              <select  class="input" name="nameis3">
                              	<option value="0">--select your experiment--</option>
                              	<option value="">Serial Position Effect</option>
                              	<option value="">Fitt's Law</option>
                              	<option value="">Hick Hyman's Law</option>
                              	<option value="">Mobile Keypad</option>
                              	<option value="">G.O.M.S Tool</option>                                
                              </select>
                              <!--<input type="text" name="nameis3" /-->
				            </p>
				            <p>&nbsp;</p>
				            <p>Type of virtual lab:<br/> 
							  <input checked="checked" name="rating22" type="radio" value="Simulation" /> Simulation
                              <input name="rating22" type="radio" value="Measurement" /> Measurement
                              <input name="rating22" type="radio" value="Remote Triggering" /> Remote Triggering<br /><br />
							  </p>
				            <p>2. Please tell your agreement with the following statements excellent,  very good, good, average, poor</p>
								  <p><br />
								    a) How do you rate the online performance of the experiment?<br/>
								    
								    <input checked="checked" name="rating3" type="radio" value="Excellent" />
								    Excellent   
								    <input name="rating3" type="radio" value="Very good" />
								    Very good   
								    <input name="rating3" type="radio" value="Good" />
								    Good
								    
								    <input name="rating3" type="radio" value="Average" />
								    Average
								    <input name="rating3" type="radio" value="Poor" />
								    Poor</p>
                                  <p><br />
                                    b) To what extent did you have control over the interactions?<br/>
                                    
                                    <input checked="checked" name="rating4" type="radio" value="Excellent" />
                                    Excellent   
                                    <input name="rating4" type="radio" value="Very good" />
                                    Very good   
                                    <input name="rating4" type="radio" value="Good" />
                                    Good
                                    
                                    <input name="rating4" type="radio" value="Average" />
                                    Average
                                    <input name="rating4" type="radio" value="Poor" />
                                  Poor</p>
                                  <p>&nbsp;</p>
                                  <p>c) To what degree was the actual lab environment simulated?<br/>
                                    
                                    <input checked="checked" name="rating5" type="radio" value="Excellent" />
                                    Excellent   
                                    <input name="rating5" type="radio" value="Very good" />
                                    Very good   
                                    <input name="rating5" type="radio" value="Good" />
                                    Good
                                    
                                    <input name="rating5" type="radio" value="Average" />
                                    Average
                                    <input name="rating5" type="radio" value="Poor" />
                                  Poor</p>
                                  <p>&nbsp;</p>
                                  <p>d) The measurement and analysis of data was found to be easy?<br/>
                                    
                                    <input checked="checked" name="rating6" type="radio" value="Excellent" />
                                    Excellent   
                                    <input name="rating6" type="radio" value="Very good" />
                                    Very good   
                                    <input name="rating6" type="radio" value="Good" />
                                    Good
                                    
                                    <input name="rating6" type="radio" value="Average" />
                                    Average
                                    <input name="rating6" type="radio" value="Poor" />
                                  Poor</p>
                                  <p>&nbsp;</p>
                                  <p>e) The manuals were found to be helpful?<br/>
                                    
                                    <input checked="checked" name="rating7" type="radio" value="Excellent" />
                                    Excellent   
                                    <input name="rating7" type="radio" value="Very good" />
                                    Very good   
                                    <input name="rating7" type="radio" value="Good" />
                                    Good
                                    
                                    <input name="rating7" type="radio" value="Average" />
                                    Average
                                    <input name="rating7" type="radio" value="Poor" />
                                  Poor</p>
                                  <p>&nbsp;</p>
                                  <p>f) The links provided were consistent with the objectives of the experiment?<br/>
                                    
                                    <input checked="checked" name="rating8" type="radio" value="Excellent" />
                                    Excellent   
                                    <input name="rating8" type="radio" value="Very good" />
                                    Very good   
                                    <input name="rating8" type="radio" value="Good" />
                                    Good
                                    
                                    <input name="rating8" type="radio" value="Average" />
                                    Average
                                    <input name="rating8" type="radio" value="Poor" />
                                  Poor</p>
                                  <p>&nbsp;</p>
                                  <p>g) The results of experiment were easily interpretable?<br/>
                                    
                                    <input checked="checked" name="rating9" type="radio" value="Excellent" />
                                    Excellent   
                                    <input name="rating9" type="radio" value="Very good" />
                                    Very good   
                                    <input name="rating9" type="radio" value="Good" />
                                    Good
                                    
                                    <input name="rating9" type="radio" value="Average" />
                                    Average
                                    <input name="rating9" type="radio" value="Poor" />
                                  Poor</p>
                                  <p>&nbsp;</p>
                                  <p>h) A clear understanding of the experiment and related topics was gained? <br/>
                                    
                                    <input checked="checked" name="rating10" type="radio" value="Excellent" />
                                    Excellent   
                                    <input name="rating10" type="radio" value="Very good" />
                                    Very good   
                                    <input name="rating10" type="radio" value="Good" />
                                    Good
                                    
                                    <input name="rating10" type="radio" value="Average" />
                                    Average
                                    <input name="rating10" type="radio" value="Poor" />
                                  Poor</p>
                                  <p>&nbsp;</p>
                                  <p>3. How helpful do you feel the system is?   
                                    <input class="input" type="text" name="nameis4" />
                                    
                                  </p>
                                  <p>&nbsp;</p>
                                  <p>4. Did you experience any problem? </p>
                                  <p>&nbsp;</p>
                                  <p align="center">
  <textarea name="feedback" rows="6" cols="80"></textarea>
</p>
                                  <p align="center">&nbsp;</p>
                                  <p align="center">&nbsp;</p>

                                  <p>5. Is there anything you would like to tell us? </p>
                                  <p>&nbsp;</p>
                                  <h3 align="center">
  <textarea name="feedback1" rows="6" cols="80"></textarea>
</h3>
                                  <p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p>6. Did you feel confident enough while performing the experimen?<br/>
  
  <input checked="checked" name="rating11" type="radio" value="yes" />
  Yes   
  <input name="rating11" type="radio" value="no" />
  No   
  <input name="rating11" type="radio" value="can't say" />
  Can't say
  </p>
<p>&nbsp;</p>
<p>7. Was the experiment/process motivating enough?<br/>
  
  <input checked="checked" name="rating12" type="radio" value="yes" />
  Yes   
  <input name="rating12" type="radio" value="no" />
  No   
  <input name="rating12" type="radio" value="can't say" />
  Can't say
  </p>
<p>&nbsp;</p>
<p>8. Did you go through tghe manual/step by step method before performing the experiments?<br/>
  
  <input checked="checked" name="rating13" type="radio" value="yes" />
  Yes   
  <input name="rating13" type="radio" value="no" />
  No
</p>
<h2>&nbsp;</h2>
<h2>&nbsp;</h2>
<h2><strong style="color: #C30">Please answer the following questions</strong>:</h2>
<p>&nbsp;</p>
<p>1. Did you get the feel &quot;actual lab&quot; while performing the experiments?</p>
<p>
  <input checked="checked" name="rating14" type="radio" value="yes" />
  Yes   
  <input name="rating14" type="radio" value="no" />
  No
  </p>
<p>&nbsp;</p>
<p>2. Did you feel the absence of an instructor?
  </p>
<p>
  <input checked="checked" name="rating15" type="radio" value="yes" />
  Yes   
  <input name="rating15" type="radio" value="no" />
  No
  </p>
<p>&nbsp;</p>
<p>3. Could you run the experiments smoothly, i.e., without any interruptions?
  </p>
<p>
  <input checked="checked" name="rating16" type="radio" value="yes" />
  Yes   
  <input name="rating16" type="radio" value="no" />
  No
</p>
<p>&nbsp;</p>
<p>4. Could you measure and analyze the data successfully?
  </p>
<p>
  <input checked="checked" name="rating17" type="radio" value="yes" />
  Yes   
  <input name="rating17" type="radio" value="no" />
  No
  </p>
<p>&nbsp;</p>
<p>5. Did you follow the step by step method before running the live experiment?
  </p>
<p>
  <input checked="checked" name="rating18" type="radio" value="yes" />
  Yes   
  <input name="rating18" type="radio" value="no" />
  No
  </p>
<p>&nbsp;</p>
<p>6. Could you compare your results with the given typical results?</p>
<p>
  <input checked="checked" name="rating19" type="radio" value="yes" />
  Yes   
  <input name="rating19" type="radio" value="no" />
  No
  </p>
<p>&nbsp;</p>
<p>7. Could you measure and analyze the data successfully?
  </p>
<p>
  <input checked="checked" name="rating20" type="radio" value="yes" />
  Yes   
  <input name="rating20" type="radio" value="no" />
  No
  </p>
<p>&nbsp;</p>
<p>8. Specify three problems/difficulties you faced while performing the experiments? </p>
<p>&nbsp;</p>
<p align="center">
  <textarea name="feedback2" rows="6" cols="80"></textarea>
</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p>9. Give three interesting things about the experiments: </p>
<p>&nbsp;</p>
<p align="center">
  <textarea name="feedback3" rows="6" cols="80"></textarea>
</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p>10. Do you think doing experiments through virtual lab gives scope for more innovative and creative research work?
  </p>
<p>&nbsp;</p>
<p>
  <input checked="checked" name="rating21" type="radio" value="good" />
  Yes   
  <input name="rating21" type="radio" value="bad" />
  No
</p>
<p>&nbsp;</p>
<p>Name of your Institution:
  <input class="input" type="text" name="nameis" />
</p>
<br />
<p>Email:
  <input class="input" type="text" name="visitormail" />
</p>
<br />
<p></p>
<p></p>
<p></p>
<p align="center">
  
  <input type="submit" value="Submit Feedback" />
</p>
<br /><br />

</form>
					</div>
				</div>
			</div>
				
            <div style="position: relative; margin:auto; width: 1024px; background-color:#0e8de0">
               	<img src="images/footer-curve.jpg" width="1024" height="31" alt="">
                <div class="copyright">
                   	Copyright &copy; 2009-2010
                </div>
                
                <br>
				
			</div>
	</body>
</html>