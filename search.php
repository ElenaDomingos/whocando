

<script>
$(document).ready(function(){
			$("#home").selecter({
				customClass: 'select_3',
				label: 'City'
				
			});

			
        });

</script>



	<div class="desctop-home" id="desctop-home">
	<form action="#" method="POST" >
		<input class="keyword" type="text" name="keyword" placeholder="Find business, services and much more"> 
		<select id="home" name="city">

			<option value="Toronto"> Toronto</option>
			<option value="Montreal"> Montreal</option>
			<option value="Ottawa"> Ottawa</option>
			
		</select>
		
		<button type="submit" name="submit" class="btn" style="height:60px;">
			<img src="img/lupa1.png" width='25' />
		</button>

		<a href="#" onclick="Advancedsearch()" class="btn1" style="height:60px;text-align:center;">
			<img src="img/atual.png" width='25' />
			<p>advanced search</p>
	</a>
	</form>

	<?php include('advanc.php'); ?>
	
	
	