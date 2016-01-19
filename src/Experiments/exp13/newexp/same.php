                <div class="button">
                    <div class="buttons">
                        <input type="button" name="sam" id="sam" value="Same" onclick="disable_enable();StopTimer();nxt.style.backgroundColor = '#808080';diff.style.backgroundColor = '#F4F4F4';sam.style.backgroundColor = '#F4F4F4'" class="sam" style="background-color: grey;" />
                        <input type="button" name="diff" id="diff" value="Different" onclick="loadXMLDoc()" class="diff" style="background-color: grey;" />
			
			<br />
			
			<input type="hidden" name="time" id="time" />
                    </div>
                </div>
		
		<div class="next">
		    <input class="text" disabled="disabled" type='text' id='timer' />
		    
		    <input type="submit" name="nxt" id="nxt" value="Next Slide >>" disabled="disabled" class="nxt" /><br />
		    <!--span style="margin-left: 210px; margin-right: auto;"><img src="images/logo/next.png" alt="Next" /></span-->
                </div>