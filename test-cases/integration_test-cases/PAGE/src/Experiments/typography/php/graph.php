<?php
    session_start();
    
    $timecst1 = $_SESSION['timecst1'];
    $timecst2 = $_SESSION['timecst2'];
    $timecst3 = $_SESSION['timecst3'];
    $timec1 = $_SESSION['timec1'];
    $timec7 = $_SESSION['timec7'];
    $timec16 = $_SESSION['timec16'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Usability Engineering Laboratory</title>
        
        <!--Stylesheets-->
        <link rel="StyleSheet" href="../css/stylemainpage.css" type="text/css">
	<link rel="StyleSheet" href="../css/fonts.css" type="text/css">
        <link rel="StyleSheet" href="../css/lightbox.css" type="text/css">
    </head>

    <body>
	
	<div class="container">
            <div class="header">
                <div class="headbar">
                    <div class="txt"><center>Creative Design, Prototyping and Experiential Simulation Lab in Human Computer Interaction (HCI).</center></div>
                </div>
                <div class="uelab">
                </div>
                <div class="heading">
                    <div class="no1">
                        Virtual Laboratory
                    </div>
                    <div class="no2">
                        
                    </div>
                </div>
            </div>
            
            <div class="content">
		<h2 style="margin-left: 50px;">Typography</h2><hr /><br />
                
		<div style="margin-left: 100px; font-size: 20px;">
		    Time taken to read the different slides with different font types and sizes were as follows
                    <hr /><br />
                    <div class="row">
                        <div class="col1">
                            <u><i>Font Name</i></u>
                        </div>
                        <div class="col2">
                            <u><i>Time (in milliseconds)</i></u>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            Calibri
                        </div>
                        <div class="col2">
                            <?php echo $timecst1; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            Times New Roman
                        </div>
                        <div class="col2">
                            <?php echo $timecst2; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            Sans-Serif
                        </div>
                        <div class="col2">
                            <?php echo $timecst3; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            Sensible Armadillo
                        </div>
                        <div class="col2">
                            <?php echo $timec1; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            Be Agressive
                        </div>
                        <div class="col2">
                            <?php echo $timec7; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            Otto
                        </div>
                        <div class="col2">
                            <?php echo $timec16; ?>
                        </div>
                    </div>
                    <hr /><br />
		    Click <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">here</a>
		</div>
		
                <div style="height: 100px;">
		    <center><a href="http://iitg.vlab.co.in/index.php?sub=72&brch=170&sim=1569&cnt=4">Go back to simulation page</a></center>
		</div>

            </div>
            
            <div class="footer">
            </div>
        </div>
	
	
	<div id="light" class="white_content">
	    <div class="graph1">
                <div class="rotate">
                    Reaction Time (in milliseconds)
                </div>
                
                <div class="graph">    
                    <iframe name="myiframe1" src="imgreg.php" width="800px" height="800px" frameborder="0">
                    </iframe>
                    
                    <center>
                        <div class="coor">
                        0
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        0.5
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        1
                        
                        <br />Interval (in seconds)
                        </div>
                    </center>
                </div>
                
                <div class="obs">
		    <span>
			<p><strong>You will observe that</strong></p>
		        <p><b>I. </b>&nbsp;</p>
			<p><b>II. </b>&nbsp;</p>
			<p><b>III. </b>&nbsp;</p>
		    	
			<br />
			
			<p style="font-weight: bold;">Note:</p>
			<p>1. If the background of the graph appears in black then it means that you have taken more time in responding to the experiment then usual time which is out of range. If you want you can try the experiment once again by going "Back to experiment main page" link below.</p>
		    </span>
		</div>
            </div>
            
	    <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
		Close
	    </a>
	</div>
        <div id="fade" class="black_overlay">
	    
	</div>
    </body>
</html>