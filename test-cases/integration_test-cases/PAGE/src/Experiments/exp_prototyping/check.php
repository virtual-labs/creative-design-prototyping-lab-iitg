<html lang="en">
<body>
    <div style="position:absolute; left:100px; top:40px;" >
       <input type="button" style="font-size:15; cursor:pointer;" value="Evaluate Your Design" onclick="javascript:ShowTask()">
    </div>
	
	
    <div id="chk" class="checklist" style="display:none; overflow:scroll">
	    	<input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
			<input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
			<input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
      	    <input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
      	    <input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
      	    <input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
      	    <input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
      	    <input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
      	    <input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
      	    <input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
      	    <input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
      	    <input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
      	    <input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br />
      	    <input id="chk1" type="checkbox" name="chk1" value="1" /> Display elements and labels on panel easily readable to the user<br /><br>
			<input type="button" style="font-size:15; cursor:pointer;" value="Close" onclick="HideTask();"  ><br><br>
    </div>  

    <script>
      function ShowTask(){
        var tdiv = document.getElementById("chk");
        tdiv.style.display="block";
      }

      function HideTask(){
        var tdiv = document.getElementById("chk");
        tdiv.style.display="none";
      }
   </script> 
   <style>
   
   div.checklist
    {
     position:absolute; 
     width:800px;
     padding:10px;
     border-radius: 0px;
     border: solid;
     margin:0px;
     left:220px; 
     top:300px; 
     height:300px;
     background-color:#F08080;
    }
 </style>	
   
</body>
</html>