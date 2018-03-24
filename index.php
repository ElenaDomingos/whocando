<?php include('popuphome.php'); ?>
<?php include('header.php'); ?>


<script src="styles/jquery-1.11.1.min.js"></script>
<script src="styles/jquery.fs.selecter.min.js"></script>
<script src="styles/modernizr.js"></script>
<link rel="stylesheet" href="styles/jquery.fs.selecter.css" />

<script>
		$(document).ready(function(){
			$("#home").selecter({
				customClass: 'select',
				label: 'City'
				
			});

			$("#popup").selecter({
				customClass: 'select_1',
				label: 'Language'
				
			});

			$("#popup1").selecter({
				customClass: 'select_1',
				label: 'Language'
				
			});

			$("#city").selecter({
				customClass: 'select_1',
				label: 'Province'
				
			});

			$("#city1").selecter({
				customClass: 'select_1',
				label: 'Province'
				
			});

			$("#category").selecter({
				customClass: 'select_1',
				label: 'Category'
				
			});

            $("#payment").selecter({
				customClass: 'select_1',
				label: 'Payment'
				
			});

			$("#rating").selecter({
				customClass: 'select_1',
				label: 'Rating'
				
			});

			$("#cities").selecter({
				customClass: 'select_1',
				label: 'City'
				
			});
			
			
		});

		
	</script>

<div class="homepage">
	<h3>What type of service are you looking for?</h3>
	<p id="bannerp">WE HAVE EVERYTHING</p>
	<form action="#" method="post">
	<div class="mobile-home" id="mobil-home">
			<div class="flex">
				<input class="keyword" type="text" name="keyword" placeholder="Keywords"> 
				<button type="submit" class="btn">
					<img src="img/lupa1.png" width='35' />
				</button>
	        </div></br>
		<select name="city">

			<option value="Toronto"> Toronto</option>
			<option value="Montreal"> Montreal</option>
			<option value="Ottawa"> Ottawa</option>
			
		</select>
				
	

	</div>
	</form>
	<div class="desctop-home" id="desctop-home">
	<form action="advancedsearch.php" method="POST">
		<input class="keyword" type="text" name="keyword" placeholder="Find business, services and much more"> 
		<select id="home" name="city">

			<option value="Toronto"> Toronto</option>
			<option value="Montreal"> Montreal</option>
			<option value="Ottawa"> Ottawa</option>
			
		</select>
		
		<button type="submit" class="btn" name="Send"> 
			<img src="img/lupa1.png" width='35' />
		</button>

		<a href="#" onclick="Advancedsearch()" class="btn1">
			<img src="img/atual.png" width='30' />
			<p>advanced search</p>
	</a>
	</form>
</div>
	

<div id="advancedsearch" >
 
<select id="category" name="">

			  
			 <option value="category_1" >Plumbing</option>
             <option value="category_2" id="category_2">Electrical</option>
			 <option value="category_3"  id="category_3">Appliances</option>
			 <option value="category_4"  id="category_4">Kitchen</option>
			 <option value="category_5"  id="category_5">Cleaning</option>
			 <option value="category_6"  id="category_6">Lock System</option>
			 <option value="category_7"  id="category_7">Pest Control</option>
			 <option value="category_8"  id="category_8">Moving</option>
		     <option value="category_9"  id="category_9">Heating</option>
			 <option value="category_10"  id="category_10">Flooring</option>
			 
</select>

<input type="text" placeholder="Business name" name="businessname" />

<select id="popup1" name="">

			<option value="English">English</option>
			<option value="French">French</option>
			 
</select>

<select id="payment" name="">

			<option value="creditcard">Credit Card</option>
			<option value="paypal">PayPal</option>
			 
</select>


<select id="rating" name="">

			<option value="high">High</option>
			<option value="medium">Medium</option>
			<option value="low">Low</option>
			 
</select>

<select id="city1" name="cities">

			<option value="Toronto"> Quebec </option>
			<option value="Montreal"> Ontário </option>
			<option value="Ottawa"> Alberta</option>
			
</select>

<select id="cities" name="">

			<option value="Toronto"> Toronto</option>
			<option value="Montreal"> Montreal</option>
			<option value="Ottawa"> Ottawa</option>
			
		</select>

<input type="text" placeholder="Zip code" name="zip_code" />
	 
<button type="submit" class="btn7">
			<img src="img/lupa1.png" width='20' />
		</button>

	 
</div>



</div> <!--homepage -->
<?php include('menuverde.php');?>
<div class="marrom">
	<h4>REGISTER FOR FREE!</h4>
	<p id="upregister">Get in touch with all kind of services.</p>
	<a href="register.php"><button class="btn3">REGISTER NOW</button></a>

</div>

</div>



 




<script>
function ClosePopUp() {
	document.getElementById('homepopup').style.display='none';
}

function Closepopup2() {
	document.getElementById('homepopup').style.display='none';
}

function Advancedsearch() {
document.getElementById('mobil-home').style.display="none";
document.getElementById('desctop-home').style.display="none";
document.getElementById('advancedsearch').style.display="flex";
}

</script>

<?php include('footer.php'); ?>
