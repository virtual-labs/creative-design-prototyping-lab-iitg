		function disable_enable(){
                if (document.all || document.getElementById){
                    if (document.slide.nxt.disabled==true){
                        document.slide.nxt.disabled=false
                        document.slide.sam.disabled=true
                        document.slide.diff.disabled=true
		    }
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