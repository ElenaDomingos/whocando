<?php include('header.php'); ?>


<div class="banner1">
<h3>Put yourself out there</h3>
<p id="bannerp">It's quick and easy!</p>
</div>

<div class="gradient">
<div class="contant">
<div class="leftone">
<h5>Terms of services</h5>
<p>Terms of services</p>

<p><i class="fas fa-edit"></i><span>Terms of service</span></p>
<p><i class="fas fa-heart"></i><span>Terms of service</span></p>
<p><i class="fas fa-share-square"></i><span>Terms of service are mentioned here</span></p>
</div>


<div class="rightone1">
<h5>Login</h5>
<p id="message">Verify your email, please!</p>
<form class="loginform" action="" method="POST"  >
<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="email" id="input-1" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-1" >
						<span class="input__label-content input__label-content--hoshi">USERNAME/EMAIL</span>
					</label>
</span></br>


<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="password" id="input-4" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
						<span class="input__label-content input__label-content--hoshi">PASSWORD</span>
					</label>
</span></br>

<a class="floatright" class="open_modal" id="go" href="#">Forgot password?</a><br/>

<div class="center"><button  type="submit" class="btn3">Login</button></div>
<p >Don't have an account yet? <a  href="register.php">Create an account</a></p>

</form>

</div>

</div> <!-- contant -->
</div> <!-- gradient -->

<?php 
if(isset($_POST['submit'])){

}?>

<div id="modal_form" >  
        
	  <h5>Reset password</h5>
	  <form action="" method="POST">
	  <span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="email" id="input-1" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-1">
						<span class="input__label-content input__label-content--hoshi">EMAIL</span>
					</label>
</span></br>
		   
		 <div class="center"> <button type="" id="modal_close" class="btn5">Cancel</button><button type="submit" id="modal_close1" class="btn3">Send</button></div></br>
		
	  </form>
	  
</div>


<div id="overlay"></div>

<script>

$('#modalform').validate();

 

 $(document).ready(function() {  
	$('a#go').click( function(event){  
		event.preventDefault();  
		$('#overlay').fadeIn(400,  
		 	function(){  
				$('#modal_form') 
					.css({'display': 'block', 'position' : 'fixed'})
					.animate({opacity: 1, top: '50%'}, 200);  
		});
	});
 
	$('#modal_close, #overlay').click( function(){  
		$('#modal_form')
			.animate({opacity: 0, top: '45%'}, 200,   
				function(){ 
					
					$(this).css('display', 'none');  
					$('#overlay').fadeOut(200);  
				}
			);
	});

    $('#modal_close1').click( function(){  
		$('#modal_form')
			.animate({opacity: 1, top: '45%'}, 200,   
				function(){ 
                    
					$(this).css('display', 'block');  
					 
					
				}
			);
			
	});

});


</script>

<?php include('footer.php');


