<div class="footer">

		<div class="leftmenu">

			<div class="leftmenu-item">
				<h5>ADVERTISERS</h5>
				<a href="#">Advertise with us</a>
				<a href="#">Advertisers beneffits</a>
				<a href="#">Advertisers Tips</a>
				<a href="#">Upgrades</a>
			</div>

			<div class="leftmenu-item">
				<h5>EASY TO FIND</h5>
				<a href="#">Browse by location</a>
				<a href="#">Browse by zipcode</a>
				<a href="#">Browse by category</a>
				<a href="#">Advanced search</a>
			</div>

			<div class="leftmenu-item">
				<h5>WHOCANDO</h5>
				<a href="#">About us</a>
				<a href="#">Privacy statement</a>
				<a href="#">Terms of use</a>
				<a href="#">Help</a>
			</div>

			<div class="leftmenu-item">
				<h5>CONTACT US</h5>
				<a href="#">Advertise center</a>
				<a href="#">Support</a>
				<a href="#">Comercial</a>
			</div>

		</div>


		<div class="rightbox">
			<a href="index.php"><div class="footerlogo"></div></a>
			<a href="#">Facebook <i class="fab fa-facebook-square"></i></a>
			<a href="#">Twitter <i class="fab fa-twitter-square"></i></a>
			<a href="#">Instagram <i class="fab fa-instagram"></i></a>
		</div>


		
</div>
 
<div class="footer-mobile">
			<div class="bottom-menu">
			<i class="fas fa-search"></i>
            </br>
			<p>search</p>
			</div>
			<div class="bottom-menu"><i class="far fa-envelope"></i></br>
			<p>message</p></div>
			<div class="bottom-menu"><i class="fas fa-bars"></i></i></br>
			<p>menu</p></div>
			<div class="bottom-menu"><i class="fas fa-user"></i></br>
			<p>my account</p></div>
		</div>



<script src="js/classie.js"></script>
		<script>
			(function() {
				 
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
</body>
</html>