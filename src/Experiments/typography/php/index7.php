<?php
	if(isset($_POST['time'])){
	
		session_start();
		
	
		$time = $_POST['time'];
	
		if($time=="")
		{
			$time=0;
		}
	
		else{
			$_SESSION['timec7']=$time-1;
		
			header("Location:index16.php");
		}
	}
	
	else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Usability Engineering Laboratory</title>
        
        <!--Stylesheets-->
        <link rel="StyleSheet" href="../css/stylemainpage.css" type="text/css">
	<link rel="StyleSheet" href="../css/fonts.css" type="text/css">
        
        <!--Scripts-->
        <script type="text/javascript">
	    function disable_enable(){
                if (document.all || document.getElementById){
                    if (document.slide.nxt.disabled==true){
                        document.slide.nxt.disabled=false
                        document.slide.sam.disabled=true
                        document.slide.diff.disabled=true
		    }
                }
            }
	    
	    function disable_start(){
                if (document.all || document.getElementById){
                    document.slide.nxt.disabled=true
                    document.slide.sam.disabled=true
                    document.slide.diff.disabled=false
                }
            }
	    
	    function disable(){
                if (document.all || document.getElementById){
                    document.slide.nxt.disabled=true
                    document.slide.sam.disabled=false
                    document.slide.diff.disabled=true
                }
            }
            
            //For Timer
		
            var t, c = <?php if(isset($_POST['time'])){echo $time;} else{echo "0";} ?>;
            function StartTimer()
            {
		document.getElementById('timer').value=c;
		c=c+1;
		t=setTimeout("StartTimer()",10);
            }
        
            function StopTimer()
            {
		document.getElementById('time').value=c;

		clearTimeout(t);
		c = 0;
            }
	    
	    function loadXMLDoc()
            {
                var xmlhttp;

                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }

                else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
                    }   
                }
                xmlhttp.open("POST","test.php",true);
                xmlhttp.send();
            }
	    
	    //cookie information
	</script>
    </head>
    
    <body onload="disable()">
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
		<form name="slide" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
			<div style="margin-left: 50px; margin-top: 5px; font-size: 26px;">Effect of Typography design on Readability</div><hr />
                
			<div style="margin-left: 25px; font-style: normal; font-size: 17px; color: red; font-weight: bold;">N.B: Please click START button below and read the following passage. After completion click STOP then proceed to NEXT.</div>

			<br />
			    <center>
				<input type="button" name="sam" id="sam" value="Start" onclick="loadXMLDoc();StartTimer();disable_start()" class="sam" />
			    </center>
			<br />
			<div class="reading">
				<div class="simul7a">
				    The window was high up the wall. Too high to reach, even standing on a stool. Not that it mattered. I doubted that there was a way to open it. And even if it could be opened, there were still the heavy steel bars. It was a small window, maybe a foot and a half square, big enough to let the occasional sun and moon look in on me. And I in turn could see a small part of the world of which I now was not a part anymore. There was a day when I stood in the middle of the room looking up at a grey and cloudy sky that the window framed. I was trying again to count. How many days have I spent here wondering how and when I would be found. The night before, I had glimpsed a half moon, a moon that was waning. And I remembered that there also was a half moon, a waxing moon, in the window when I had arrived here an eternity ago. It had been on the eighth day of December when they had shoved me into this cell. So this then was two weeks ago and now it must be close to Christmas I reckoned. Maybe it was Christmas Eve already. I could not be sure. But I was sure that Margo had gone to town to look for me when I had not come home two weeks ago. But where could a wife turn to find a husband who had disappeared without a trace.
				</div>
				<div class="simul7b">
				    These were chaotic, turbulent times in postwar Germany. My daily pleas to the wardens fell on deaf ears; the answer never varied, 'shut up'. And so the cold dreary days wore on monotonously with black bread and stale water in the morning, a tepid bowl of soup or gruel in the evening. But at least I had one unwavering friend, my window high up the wall. It was my light bulb and my wall clock, my weather reporter and my movie screen. Here clouds formed and dissolved, some moving leisurely last, some hurrying in a frenzy to get somewhere else. And once I even watched a plane flying high in the sky. It truly was a much needed friend. It helped me to see each day through. It was always my companion, whether I watched the stars at night or the birds flying by during the day. The window well even showed me how thick and how solid the walls were that held me captive. Then it happened. One early afternoon the heavy grey cell door swung open and a gruff voice ordered me out. Would I step into freedom finally or did the fates have other surprises for me I wondered? And as I stepped into the hallway I glanced back one last time. A very quick glance. A goodbye glance to my friend, the window high up the wall.
				</div>
			</div>
			<div style="height: 100px;">
			    <center>
				<br />
				<input type="button" name="diff" id="diff" class="sam" value="Stop" onclick="disable_enable();StopTimer();nxt.style.backgroundColor = '#808080';diff.style.backgroundColor = '#F4F4F4';sam.style.backgroundColor = '#F4F4F4'" />
				<input type="submit" name="nxt" id="nxt" class="sam" value="Next" disabled="disabled" class="nxt" /><br />
				
				<br />
				
				<input type="hidden" name="time" id="time" />
		
				<input class="text" disabled="disabled" type='hidden' id='timer' />
			    </center>
			</div>
		</form>
            </div>
            
            <div class="footer">
            </div>
        </div>
    </body>
</html>
<?php } ?>