   var actdiv=0;
   var bhxfl="F";
   var thxfl="F";


   function divb(mid)
   {
      document.getElementById("div1").style.border="1px solid grey";     
      document.getElementById("div2").style.border="1px solid grey";
      document.getElementById("div3").style.border="1px solid grey";     
      document.getElementById("div4").style.border="1px solid grey";
      document.getElementById("div5").style.border="1px solid grey";      
      document.getElementById(mid).style.border="2px #FF0000 solid";
      actdiv=mid;
   }


   function GiveHex(Dec)
   {
      if(Dec == 10)
         Value = "A";
      else
      if(Dec == 11)
         Value = "B";
      else
      if(Dec == 12)
         Value = "C";
      else
      if(Dec == 13)
         Value = "D";
      else
      if(Dec == 14)
         Value = "E";
      else
      if(Dec == 15)
         Value = "F";
      else
         Value = "" + Dec;
      return Value;
   }


   function  setback()
   {
      var frd=0, fgr=0 , fbl=0 , hex=0;
   
      if(bhxfl=="T")
      {
         hex=document.getElementById("bhex").value;
         HexToRGB(hex);
         bhxfl="F";
      }

      frd=document.getElementById("bkrd").value;
      fgr=document.getElementById("bkgr").value;       
      fbl=document.getElementById("bkbl").value;
   
      a = GiveHex(Math.floor(frd / 16));
      b = GiveHex(frd % 16);
      c = GiveHex(Math.floor(fgr / 16));
      d = GiveHex(fgr % 16);
      e = GiveHex(Math.floor(fbl/ 16));
      f = GiveHex(fbl % 16);
      z = a + b + c + d + e + f;
   
      document.getElementById(actdiv).style.backgroundColor= '#'+z;      
      document.getElementById("bhex").value=z;
   }       

 
   function  settxt()
   {
      var frd=0, fgr=0 , fbl=0 , hex=0;
   
      if(thxfl=="T")
      {
         hex=document.getElementById("thex").value;
         HexToRGB(hex);
         thxfl="F";
      }
   
      frd=document.getElementById("txrd").value;
      fgr=document.getElementById("txgr").value;       
      fbl=document.getElementById("txbl").value;
      
   
      a = GiveHex(Math.floor(frd / 16));
      b = GiveHex(frd % 16);
      c = GiveHex(Math.floor(fgr / 16));
      d = GiveHex(fgr % 16);
      e = GiveHex(Math.floor(fbl/ 16));
      f = GiveHex(fbl % 16);
      z = a + b + c + d + e + f;
   
      document.getElementById(actdiv).style.color = '#'+z;  
      document.getElementById("thex").value=z;
   }       

   function updateB()
   {
      mbkrd = document.getElementById('bkrd').value;
      mbkgr = document.getElementById('bkgr').value;
      mbkbl = document.getElementById('bkbl').value;
      
      if((mbkrd > 255 || mbkrd < 0)  || (mbkgr > 255 || mbkgr < 0) || (mbkbl > 255 || mbkbl < 0))
         alert("Please enter background color values between 0-255.");
            
      else
      {
         setback();
      }
   }


   function updateT()
   {
      mtxrd = document.getElementById('txrd').value;
      mtxgr = document.getElementById('txgr').value;
      mtxbl = document.getElementById('txbl').value;
      
      if( (mtxrd > 255 || mtxrd < 0)  || (mtxgr > 255 || mtxgr < 0) || (mtxbl > 255 || mtxbl < 0) )
         alert("Please enter text color values between 0-255.");
         
      else
      {
         settxt();
      }
   }



   function GiveDec(Hex)
   {   
      if(Hex == "A")
         Value = 10;
      else
      if(Hex == "B")
         Value = 11;
      else
      if(Hex == "C")
         Value = 12;
      else
      if(Hex == "D")
         Value = 13;
      else
      if(Hex == "E")
         Value = 14;
      else
      if(Hex == "F")
         Value = 15;
      else
         Value = eval(Hex);
      return Value;
   }


   function setthexflag()
   {
      thxfl="T";
   }

   function setbhexflag()
   {
      bhxfl="T";
   }

   
   function HexToRGB(hexin)
   {
      var a=0,b=0,c=0,d=0,e=0,f=0;
   
      a = GiveDec(hexin.substring(0, 1));
      b = GiveDec(hexin.substring(1, 2));
      c = GiveDec(hexin.substring(2, 3));
      d = GiveDec(hexin.substring(3, 4));
      e = GiveDec(hexin.substring(4, 5));
      f = GiveDec(hexin.substring(5, 6));

      frd = (a * 16) + b;
      fgr = (c * 16) + d;
      fbl = (e * 16) + f;
   
      if(thxfl=="T")
      {
         document.getElementById("txrd").value=frd;
         document.getElementById("txgr").value=fgr;
         document.getElementById("txbl").value=fbl;
      }

      if(bhxfl=="T")
      {
         document.getElementById("bkrd").value=frd;
         document.getElementById("bkgr").value=fgr;
         document.getElementById("bkbl").value=fbl;
      }
   }