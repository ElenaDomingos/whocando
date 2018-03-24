<?php include('header.php'); ?>

<script src="styles/jquery-1.11.1.min.js"></script>
<script src="styles/jquery.fs.selecter.min.js"></script>
<link rel="stylesheet" href="styles/jquery.fs.selecter.1.css" />
<script>
		$(document).ready(function(){
			$("#businesstype").selecter({
				customClass: 'select-reg',
				label: "Business Type"
			 
				 
				
			});

			$("#country").selecter({
				customClass: 'select-reg',
				label : "Province"
			 
				 
				
			});

			$("#country1").selecter({
				customClass: 'select-reg',
				label : "Province"
			 
				 
				
			});

			$("#city").selecter({
				customClass: 'select-reg',
				label: "City"
			 
				 
				
			});

			$("#city1").selecter({
				customClass: 'select-reg',
				label: "City"
			 
				 
				
			});

			$("#gender").selecter({
				customClass: 'select-reg',
				label: "Gender"
			 
				 
				
			});
		});
		 
		
	</script>

<div class="banner">
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

		<div>
			<p id="regpage">WHO ARE YOU?</p>
			<input onchange="statusChangetocontractor()"  type="radio" name="whoareyou" value="client" id="clientchecked"/><span id="left"> CLIENT </span>
            <input onchange="statusChangetoclient()"  type="radio" name="whoareyou" value="contractor"  id="contractorchecked"  checked="checked" /><span> CONTRACTOR</span>
		</div>

			<div id="client">
			<form action='' method='POST' id="formregister">
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="name" id="input-2" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-2">
						<span class="input__label-content input__label-content--hoshi">USER NAME *</span>
					</label>
            </span>
			<div class="in-line">
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="name" id="input-3" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-3">
						<span class="input__label-content input__label-content--hoshi">FIRST NAME *</span>
					</label>
            </span>
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="name" id="input-5" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-5">
						<span class="input__label-content input__label-content--hoshi">LAST NAME *</span>
					</label>
            </span></br>
			
			</div>
			<div class="in-line-2">
			<select id="country" name="country">
				<option value="canada">Quebec</option>
				<option value="usa">Ontário</option>
				 
			</select>
			<select  id="city" name="city">
				<option value="independent">Willmington</option>
				<option value="contractor">Folcroft</option>
				<option value="business">New York</option>
			</select>
			</div> 
			<div class="in-line" style="margin-top:20px;">
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="email" id="input-6" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-6">
						<span class="input__label-content input__label-content--hoshi">EMAIL ADDRESS *</span>
					</label>
            </span>
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-7" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-7">
						<span class="input__label-content input__label-content--hoshi">PHONE NUMBER *</span>
					</label>
            </span></br>
			
			</div> 
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-8" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-8">
						<span class="input__label-content input__label-content--hoshi">ADDRESS *</span>
					</label>
            </span></br>
			 
			<div class="in-line">

			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="password" id="input-9" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-9">
						<span class="input__label-content input__label-content--hoshi">PASSWORD *</span>
					</label>
            </span>
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="password" id="input-10" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-10">
						<span class="input__label-content input__label-content--hoshi">CONFIRM PASSWORD *</span>
					</label>
            </span></br>
			
			</div>

                       <input type="checkbox" onchange ="Termsofservice()" id="accept1" name="accept" value="showinlist" required/> 
			<label for"accept">I accept the Terms of Services Agreement.</label></br>
			<input type="checkbox" id="showinlist" name="showinlist" value="showinlist" />
			<label for="showinlist">I want to receive special offers and news by Newsletter.</label><br/>

                        <div class="g-recaptcha" data-sitekey="6LephkgUAAAAABj64Twl-oRhFO5bajqCXoGzHYpR" required></div>
			<button type="submit" class="btn3" name="client">Send</button>
			</form>
			</div>


            <div id="contractor">
			<h5 id="info">BUSINESS INFO</h5>
			<form action='thankfor.php' method='POST'>
			<div class="in-line">

			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-9" name="user_name" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-9">
						<span class="input__label-content input__label-content--hoshi">USER NAME *</span>
					</label>
            </span>
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-10"  name="business_name" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-10">
						<span class="input__label-content input__label-content--hoshi">BUSINESS NAME *</span>
					</label>
            </span></br>
			</div>
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-8" name="business_number" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-8">
						<span class="input__label-content input__label-content--hoshi">BUSINESS PHONE NUMBER *</span>
					</label>
            </span></br>
			 
			<textarea type="text" rows="4"  placeholder="Describe what you will offer *"  name="description" required  /></textarea>

			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" name="website" id="input-8" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-8">
						<span class="input__label-content input__label-content--hoshi">WEBSITE</span>
					</label>
			</span></br>
			
			 
			<div class="in-line-2">
			<select id="country1" name="province">
				<option value="canada">Quebec</option>
				<option value="usa">Ontário</option>
				 
			</select>
			
			<select  id="city1" name="city">
				<option value="independent">Willmington</option>
				<option value="contractor">Folcroft</option>
				<option value="business">New York</option>
			</select>
			</div> 

			<div class="in-line-1">
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-9" name="postal_code" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-9">
						<span class="input__label-content input__label-content--hoshi">POSTAL CODE *</span>
					</label>
            </span>
			
			 
			<select id="businesstype" name="typeofindustry" required>
                                 
				<option value="independent">Independent</option>
				<option value="contractor">Contractor</option>
				<option value="business">Business</option>
			</select>
			</div>

			<input type="checkbox" id="showinlist" name="showinlist" value="showinlist" />
			<label for="showinlist">Display company address on listing.</label>
			
			<h5 id="info">CONTACT INFO</h5>
			<div class="in-line">
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" required name="first_name" id="input-9" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-9">
						<span class="input__label-content input__label-content--hoshi">FIRST NAME *</span>
					</label>
            </span>
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-10" name="last_name" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-10">
						<span class="input__label-content input__label-content--hoshi">LAST NAME *</span>
					</label>
            </span></br>
			
			</div>
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-10" name="email" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-10">
						<span class="input__label-content input__label-content--hoshi">EMAIL ADDRESS *</span>
					</label>
            </span></br>
			
			<div class="in-line-1">
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="date" id="input-10" name="birthday" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-10">
						<span class="input__label-content input__label-content--hoshi">BIRTHDAY *</span>
					</label>
            </span>
			 
			<select name="gender" id="gender" name="gender">
			 
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
			 
			</div>
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-10" name="phone_number"  required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-10">
						<span class="input__label-content input__label-content--hoshi">PHONE NUMBER *</span>
					</label>
            </span></br>
			 
            
            
			<input type="checkbox" onchange ="Termsofservice()" id="accept" name="accept" value="showinlist" required/>
			<label for"accept">I accept the Terms of Services Agreement.</label></br>
			<input type="checkbox" id="showinlist" name="newsletter"   />
			<label for="showinlist">I want to receive special offers and news by Newsletter.</label><br/>

                        <div class="g-recaptcha" data-sitekey="6LephkgUAAAAABj64Twl-oRhFO5bajqCXoGzHYpR" required></div>
			<button type="submit" class="btn3" name="contractor">Send</button>
			</form>
			</div>


		</div> 


	</div> <!-- contant -->
</div> <!-- gradient -->


<?php include('menuverde.php'); ?>

 <div id="termsservice">
 <span id="modal_close" onclick="Closepopup1()">X</span>
<h1>Terms and Conditions  test</h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
Where can I get some?
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
Where can I get some?
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
<button class="btn3" onclick="Closepopup()" name="closepopup" id="closepopup" /> I accept</button>
</div> 


<script> 

$('#formregister').validate();

function statusChangetoclient() {
document.getElementById('contractor').style.display="block";
document.getElementById('client').style.display="none";
}

function statusChangetocontractor() {
document.getElementById('client').style.display="block";
document.getElementById('contractor').style.display="none";
}

function Termsofservice() {
document.getElementById('termsservice').style.visibility='visible';
}


function Closepopup(){
	 
	document.getElementById('termsservice').style.visibility='hidden';
	$("#accept").attr("checked","checked");
	 $("#accept1").attr("checked","checked");
}

function Closepopup1(){
	 
	 document.getElementById('termsservice').style.visibility='hidden';
	 $("#accept").removeAttr("checked");
	 $("#accept1").removeAttr("checked");
 }



</script>

<?php include('footer.php'); ?>
