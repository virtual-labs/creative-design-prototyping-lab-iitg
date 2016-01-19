<?php
    session_start();
    
    $timecbt1 = $_SESSION['timecbt1'];
    $timecbt2 = $_SESSION['timecbt2'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Usability Engineering Laboratory</title>
        
        <!--Stylesheets-->
        <link rel="StyleSheet" href="../css/stylemainpage.css" type="text/css">
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
                
		<div  style="margin-left: 100px; font-size: 20px;">
		    Time taken to read the different slides with different font types and sizes were as follows
                    <hr /><br />
                    <div class="row">
                        <div class="col1">
                            Slide No
                        </div>
                        <div class="col2">
                            Time (in milliseconds)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            1
                        </div>
                        <div class="col2">
                            <?php echo $timecbt1; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            2
                        </div>
                        <div class="col2">
                            <?php echo $timecbt2; ?>
                        </div>
                    </div>
                    <hr /><br />
		</div>
		
                <div style="height: 100px;">
		    <center><a href="http://iitg.vlab.co.in/index.php?sub=72&brch=170&sim=1569&cnt=4">Go back to simulation page</a></center>
		</div>

            </div>
            
            <div class="footer">
            </div>
        </div>
    </body>
</html>