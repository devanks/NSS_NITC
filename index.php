<!DOCTYPE html>
<html>
	<head>
		<link rel="SHORTCUT ICON" href="favicon.ico" />
		<title>NSS NITC</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="jquery-3.2.1.js"></script>
		<script src="js/jquery.touchSwipe.min.js"></script>  
		     
		<style>
		#formButton
		{
			background-color: #333333;
			border: 2px solid white;
			border-radius: 27px;
			color: white;
			cursor: pointer;
			font-size: 20px;
			margin-top: 20px;
			padding: 15px 30px;
			text-transform: uppercase;
			transition: all 200ms;
		}
		#formButton:hover, #formButton:focus
		{
			background-color: white;
			color: #333333;
			outline: 0;
		}
		label
		{
		  display: block;
		  letter-spacing: 4px;
		  padding-top: 30px;
		  text-align: center;
		}
		label .label-text {
		  color: #9B9B9B;
		  cursor: text;
		  font-size: 20px;
		  line-height: 20px;
		  text-transform: uppercase;
		  -moz-transform: translateY(-34px);
		  -ms-transform: translateY(-34px);
		  -webkit-transform: translateY(-34px);
		  transform: translateY(-34px);
		  transition: all 0.3s;
		}
		label input {
		  background-color: transparent;
		  border: 0;
		  border-bottom: 2px solid #4A4A4A;
		  color: white;
		  font-size: 36px;
		  letter-spacing: -1px;
		  outline: 0;
		  padding: 5px 20px;
		  text-align: center;
		  transition: all 0.3s;
		  width: 200px;
		}
		label input:focus {
		  max-width: 100%;
		  width: 400px;
		}
		label input:focus + .label-text {
		  color: #F0F0F0;
		  font-size: 13px;
		  -moz-transform: translateY(-74px);
		  -ms-transform: translateY(-74px);
		  -webkit-transform: translateY(-74px);
		  transform: translateY(-74px);
		}
		label input:valid + .label-text {
		  font-size: 13px;
		  -moz-transform: translateY(-74px);
		  -ms-transform: translateY(-74px);
		  -webkit-transform: translateY(-74px);
		  transform: translateY(-74px);
		}

		button 
		{
		  text-transform: uppercase;
		  transition: all 200ms;
		}
		</style>
			 
		<!--SIDEBAR FUNCTION-->
			 
		<script>
		function w3_open() 
		{
			document.getElementById("mySidebar").style.display = "block";
			document.getElementById("myOverlay").style.display = "block";
		}
		function w3_close() 
		{
			document.getElementById("mySidebar").style.display = "none";
			document.getElementById("myOverlay").style.display = "none";
		}
		</script>
		
		<!--TOUCHSCREEN SIDEBAR FUNCTION-->
		
		<script>
			$(window).load(function()
			{
				$(".swipe-area").swipe(
				{
					swipeStatus:function(event, phase, direction, distance, duration, fingers)
					{
						if (phase=="move" && direction =="right") 
						{
							w3_open();
							return false;
						}
						if (phase=="move" && direction =="left") 
						{
							w3_close();
							return false;
						}
					}
				});
			});
		</script>
		
		<!--IN PAGE CSS-->
		
		<link rel="stylesheet" href="inline.css">
		
		<!--UNSTICKY HEADER FUNCTION-->
		
		<script>
			$(document).ready(function()
			{
				$(function () 
				{
				// Check the initial Position of the Sticky Header
				var stickyHeaderTop = $('#stickyHeaderL').offset().top;

					$(window).scroll(function () 
					{
						if ($(window).scrollTop() > stickyHeaderTop) 
						{
							$('#stickyHeaderL').css({
								position: 'fixed',
								top: '0px'
							});
							$('#otherContent').css('margin-top', $('#stickyHeaderL').outerHeight(true) + parseInt($('#unStickyHeader').css('marginBottom')));
						} else 
						{
							$('#stickyHeaderL').css({
								position: 'static',
								top: '0px'
							});
							$('#otherContent').css('margin-top', '0px');
						}
					});
				});
			}); 

		</script>


	</head>

	
	
	<body id="outerBody">
	
		<!--SWIPE-->
	
		<div class="swipe-area w3-hide-large"></div>
		
		<!--UNSTICKY HEADER-->
		
		<div id="unStickyHeader" class="w3-container">
			<div class="w3-center w3-hide-small w3-hide-medium w3-xxxlarge w3-wide">
			<img src="images/logo.png" alt="NSS" height="50" width="auto">
			NSS NITC
			</div>
		</div>
		
		<!--NAVBAR-->
		
		<div id="stickyHeaderL" class="w3-bar w3-card-2 w3-large w3-hide-small w3-hide-medium" style="position: static; top: 0px;">
		
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="about.html" 
				title="About NSS NITC">ABOUT
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="activities.html" 
				title="Activities">ACTIVITIES
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="blood.html" 
				title="Details on Blood Donations">BLOOD FORUM
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="hour.html" 
				title="Check NSS Hours">HOUR LIST
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="contact.html" 
				title="Contact us">CONTACT US
			</a>
			<form>
				<a
					href="file:///D:/Documents/Projects/WebP/Project%202/hours.html#" 
					class="w3-bar-item w3-btn w3-ripple w3-right" id="goButton">
					Go
				</a>
				<input 
					type="text" 
					class="w3-bar-item w3-input w3-right" 
					placeholder="Check Hours gained">	
			</form>
		</div>
		
		
		<!-- HAMBURGER ICON AND NAV BAR -->
		
		
		<div 	class="w3-overlay w3-animate-opacity" 
				onclick="w3_close()" 
				style="cursor:pointer" 
				id="myOverlay">
		</div>
		
		<div 	id="stickyHeaderS" class="w3-bar w3-hide-large" style="position: fixed; top: 0px;margin-bottom: ">
				<a 	href="#" 
					class="w3-bar-item w3-btn w3-ripple" 
					style="width:10%" 
					title="Open Side Navigation" 
					onclick="w3_open()">
						<i class="fa fa-bars"></i>
				</a>
				<a 	class="w3-bar-item" 
					style="width:32.5%">
				</a>
				<a 	class="w3-bar-item" 
					style="width:57.5%">
						<img src="images/logo.png" alt="NSS" height="20" width="auto">
				</a>
		</div>
		
		<!--SIDEBAR-->
		
		<div 	class="w3-sidebar w3-bar-block w3-animate-left" 
				style="display:none;z-index:5" 
				id="mySidebar">
				<button onclick="w3_close()" 
						class="w3-bar-item  w3-button w3-large">
						Close &times;
				</button>
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="about.html" 
				title="About NSS NITC">ABOUT
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="activities.html" 
				title="Activities">ACTIVITIES
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="blood.html" 
				title="Details on Blood Donations">BLOOD FORUM
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="hour.html" 
				title="Check NSS Hours">HOUR LIST
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="contact.html" 
				title="Contact us">CONTACT US
			</a>
			<form>
				<a 
					href="file:///D:/Documents/Projects/WebP/Project%202/hours.html#" 
					class="w3-btn w3-cell w3-ripple w3-right" id="goButton" style="font-size:16px;width:30%">
					Go
				</a>
				<input 
					type="text" 
					class="w3-input w3-cell w3-right"
					style="width:70%"
					placeholder="Check Hours">	

			</form>
		</div>
		
		<!--CORRECTION SPACE-->
		
		<div 	id="spacing" 
				class="w3-container w3-hide-large" 
				style="margin-bottom: 40px">
				<!--CORRECTION SPACE-->
		</div>
		
		<!--BODY-->
		
		<div id="otherContent" class="w3-container" style="margin-top: 0px;">
		
			<div class="info-card w3-card-4 w3-center" style="padding-top:50px;padding-bottom:50px;height:150px">
				<div class="w3-bar">
					<button class="w3-button w3-mobile w3-black" style="width:40%" onclick="document.getElementById('id01').style.display='block'">Admin Login</button>
					<button class="w3-button w3-mobile w3-black" style="width:40%" onclick="document.getElementById('id02').style.display='block'">Check hours</button>
				</div>
			</div>
		
			<!--Admin Login modal-->
			<div id="id01" class="w3-modal" onclick="this.style.display:"none">
				<div class="w3-modal-content w3-animate-zoom w3-card-4">
					<header class="w3-container w3-teal" style="background-color: #333333;font-family: "Open Sans", Helvetica;">  
						<span onclick="document.getElementById('id01').style.display='none'" 
							class="w3-button w3-display-topright">&times;</span>
						<h2>Login Page</h2>
					</header>
					<div class="w3-container" style="background-color: #333333;padding-left:0px;padding-right:0px;">
						<form action="includes/process_login.php" method="post" name="login_form" style="text-align:center">
							<label>
								<input type="text" name="email" required/>
								<div class="label-text">Username</div>
							</label>
							<label>
								<input type="password" name="password" id="password" required/>
								<div class="label-text">Password</div>
							</label>
							<footer class="w3-container w3-teal">
								<p><button id="formButton" value="Login" onclick="formhash(this.form, this.form.password);" >Login</button></p>
							</footer>
						</form> 
					</div>
				</div>
			</div>
			
			<!--Check user hours modal-->
			<div id="id02" class="w3-modal" onclick="this.style.display:"none">
				<div class="w3-modal-content w3-animate-zoom w3-card-4">
					<header class="w3-container w3-teal" style="background-color: #333333;font-family: "Open Sans", Helvetica;">  
						<span onclick="document.getElementById('id02').style.display='none'" 
							class="w3-button w3-display-topright">&times;</span>
						<h2>Hour Check</h2>
					</header>
					<div class="w3-container" style="background-color: #333333;padding-left:0px;padding-right:0px;">
						<form style="text-align:center">
							<label>
								<input type="text" required/>
								<div class="label-text">Rollnumber</div>
							</label>
							<footer class="w3-container w3-teal">
								<p><button id="formButton">Check</button></p>
							</footer>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!--Modal close function-->
		<script>
		// Get the modal
		var modal1 = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event)
		{
			if (event.target == modal1) {
				modal1.style.display = "none";
			}
		}
		</script>
		<script>
		// Get the modal
		var modal2 = document.getElementById('id02');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event)
		{
			if (event.target == modal2) {
				modal2.style.display = "none";
			}
		}
		</script>
		
		<!-- FOOTER -->
		
		<div id="footer-bar" class="info-card w3-card-4">
			<div class="w3-container w3-cell">
					<p class=" w3-large w3-serif">
					<i class="fa fa-quote-right w3-xxlarge w3-text-red"></i><br>
					<script src="https://wordsmith.org/words/quote2.js"></script>
			</div>
			<div class="w3-container w3-cell">
				<img src="images/nitc.png" alt="NITC" style="padding-top:20px;width:100px;float:right;clear:right;"></img>
			</div>
		</div>
	</body>
</html>