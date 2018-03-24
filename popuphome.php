<?php if(!isset($_COOKIE['Whocandopopuphome'])) {

echo '<div class="popup" id="homepopup">

<span id="modal_close" onclick="Closepopup2()">X</span>
<p>Please, select language preference and province. Then click to Continue. Thank you.</p>
<div class="center" style="display:flex;justify-content:center;width:58%;flex-wrap:nowrap;padding-top:30px;">
<form action="#" method="POST" >
<select id="popup" name="lang">

			<option value="English">English</option>
			<option value="French">French</option>
			 
</select>
<select id="city" name="cities">

			<option value="Toronto"> Quebec </option>
			<option value="Montreal"> Ontário </option>
			<option value="Ottawa"> Alberta</option>
			
</select>

<button onclick="ClosePopUp()" class="btn6" type="submit" name="submit">Continue</button>
</form>
</div>
<p id="cookie">We use cookies to ensure that we give you the best experience on our website. You may, however change your cookie setting in any time; if you disable your cookies, some of the information you see on our website may be inaccurate or not applicable. Entrance to this website assumes you have you have read and agree to our Legal and Privacy terms.
	</p>
</div>';
if(isset($_POST['submit'])) {
	$name='Whocandopopuphome';
	$lang = $_POST["lang"];
	$cities = $_POST["cities"];
	$langandcity = $lang . ' ' . $cities ;
	setcookie($name, $langandcity, time() + 3600000 );
	
	
     }

} ?>