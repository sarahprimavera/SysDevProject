<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="mainpagecss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel = "icon" href = 
"https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Africa_%28orthographic_projection%29.svg/1200px-Africa_%28orthographic_projection%29.svg.png" 
        type = "image/x-icon">
</head>
<body style="background-color:#00a459;">
	<div id="header">
		<img src="dunes.png">
		<h1>Welcome To Kadija's Online Food Shop</h1>
	</div>
		<div id="temp" style="visibility: hidden;tab-size: 4;"></div>
		<nav>
			<span1>&emsp;&emsp;Welcome Guest</span1>
			<div id="items">
			<a href="home_page.html">
				<!--image of house next to "home" -->
				<i class="fa fa-home" aria-hidden="true"></i>
			Home</a> 
  			<a href="cart_page.html">
  				<!--image of cart next to "cart" -->
  				<i class="fa fa-shopping-cart" aria-hidden="true"></i>
		Cart</a> 
  			<a href="/js/">About</a> 
  			<a  href="#" onclick="popin();">Login</a>
  			<script type="text/javascript">
				var add = document.getElementById("temp");
				var count = 1;
				//close the log in popup when user presses outside the box
				window.addEventListener('click', function(e){
	
				if (add.contains(e.target)){
 			 	} else{
  					
  					if(add.style.visibility == "visible" && count % 2){
  						$("#temp").css({"visibility" : "hidden"});
  					}
  					//if the login is visible lower the count
  					if(add.style.visibility == "visible"){
  						count--;
  					} 					
 				 }
				})
				//make the login page pop in when "Log in is pressed"
  				function popin() { 	
  				//change the content of the log in box				
  					add.innerHTML = '<br><form>' +
  					'<center>Sign in to your account</center><br><br>'+
  					'<label for="email">Email Address</label><br>' +
  					'<input type="email" id="email" name="email" value=""align="right" placeholder="Enter Your Email Address..">'+
  					'<br><br><label for="password">Password</label><a id="pass" onclick="lostPass();">forgot password?</a><br>'+
  					'<input type="password" id="password" name="Password" value=""align="right" placeholder="Enter Your Password.."><br><br>'+
  					'<button type="submit" name="login" class="btn btn-primary">Sign in</button>'+
  					'<br><p>New Client?		<a onclick="createNew();">Create Account</a></p>' +
  					'</form>';
  					//add css to the login box using jquery
  					$("#temp").css({"background-color": "white", "font-size": "150%", "width" : "425px", "height" : "400px", "visibility" : "visible"});
  					count++;
  				}
  				//function to change the popup to create new account
  				function createNew() {
  					add.innerHTML = '<br><form>' +
  					'<center>Create an Account</center><br><br>'+
  					'<label for="firstname">First Name</label><br>' +
  					'<input type="firstname" id="firstname" name="Firstname" value=""align="right" placeholder="Enter Your First Name..">'+
  					'<br><br><label for="lastname">Last Name</label>'+
  					'<input type="lastname" id="lastname" name="Lastname" value=""align="right" placeholder="Enter Your Last Name.."><br><br>'+
  					'<br><br><label for="homeaddress">Home Address</label>'+
  					'<input type="textarea" id="homeaddress" name="Homeaddress" value=""align="right" placeholder="Enter Your Home Address..">'+
					'<br><br><label for="emailaddress">Email Address</label>'+
  					'<input type="emailaddress" id="emailaddress" name="Emailaddress" value=""align="right" placeholder="Enter Your Email Address..">'+
					'<br><br><label for="password">Password</label>'+
  					'<input type="password" id="password" name="Password" value=""align="right" placeholder="Enter Your Password.."><br><br>'+
					'<br><br><label for="repassword">Re-Enter Password</label>'+
  					'<input type="password" id="repassword" name="RePassword" value=""align="right" placeholder="Re-Enter Your Password.."><br><br>'+
  					'<button class="small" type="button" >Create</button>  <button type="button" id="cancelButton" onclick="popin();">Cancel</button>'+
  					'</form>';
					
					//add css to the login box using jquery
  					$("#temp").css({"background-color": "white", "font-size": "150%", "width" : "425px", "height" : "800px", "visibility" : "visible"});
  					count++;
  				}
				
				function lostPass(){
  					add.innerHTML = '<br><form>' +
  					'<center>Forgotten Password?</center><br><br>'+
  					'<p>If you forgot your password, please put in your email address in the textbox below, then click reset password link </p><br>' +
  					'<input type="email" id="email" name="email" value=""align="right" placeholder="Enter Your Email Address..">'+
  					'<br><br>' +
  					'<button type="button" onclick="resetMail();" id="resetButon">Send Reset Password Link</button><br><br>' +
  					'<button type="button" id="cancelButton" onclick="popin();">Cancel</button>' +
  					'</form>';
  					$("#temp").css({"background-color": "white", "font-size": "150%", "width" : "425px", "height" : "500px", "visibility" : "visible"});
  					count++;
  				}
  				/*function resetPass(){
  					add.innerHTML = '<br><form>' +
  					'<center>Reset Your Password</center><br><br>'+
  					'<label for="password">New Password</label><br>'+
  					'<input type="password" id="password" name="Password" value=""align="right" placeholder="Enter Your Password.."><br><br>' +
  					'<label for="password">Confirm New Password</label><br>'+
  					'<input type="password" id="password" name="Password" value=""align="right" placeholder="Enter Your Password.."><br><br>' +
  					'<ul>'+
  					'<li>Password requirement</li>'+
  					'<li>Must contain 5 characters</li>'+
  					'<li>Must contain 1 capital</li>'+
  					'<li>Must contain 1 speacial character</li>'+
  					'</ul>'+
  					'<button type="button" id="changeButton" class="small" >Change</button>' +
  					'<button type="button" id="cancelButton" class="small" onclick="lostPass()">Cancel</button>' +
  					'</form>';
  					$("#temp").css({"background-color": "white", "font-size": "150%", "width" : "425px", "height" : "500px", "visibility" : "visible"});
  					count++;
  				}*/
				
			</script>
  			</div>
		</nav>
		
		
		<div class="row-1-1">
		
		<input id="center" name="search" type="text" placeholder="Search available Mauritanian Dish" >
		</div>
	
		<div class="moveleft">
		<div class="box-wrapper">
		
			<div class="row-2-3">
			<div class="newRow">
			<div class="middle-row">
            <div id="box1">
               <img src="food1.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #1</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <i class="fa fa-eye" aria-hidden="true"></i>
				View</a></p>
            </div>
			
            <div id="box2">
               <img src="food2.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #2</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <i class="fa fa-eye" aria-hidden="true"></i>
				View</a></p>
            </div>
            <div id="box3">
               <img src="food3.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #3</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <i class="fa fa-eye" aria-hidden="true"></i>
				View</a></p>
            </div>
			</div>
			</div>
			</div>
			<div class="row-2-3">
			<div class="newRow">
			<div class="middle-row">
            <div id="box4">
               <img src="food1.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #4</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <i class="fa fa-eye" aria-hidden="true"></i>
				View</a></p>
            </div>
            <div id="box5">
               <img src="food2.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #5</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <i class="fa fa-eye" aria-hidden="true"></i>
				View</a></p>
            </div>
            <div id="box6">
               <img src="food3.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #6</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <i class="fa fa-eye" aria-hidden="true"></i>
				View</a></p>
            </div>
			</div>
		 </div>
		 </div>
		 </div>
		 </div>
</body>
</html>