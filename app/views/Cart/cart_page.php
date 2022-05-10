<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="mainpagecss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel = "icon" href = 
"https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Africa_%28orthographic_projection%29.svg/1200px-Africa_%28orthographic_projection%29.svg.png" 
        type = "image/x-icon">
</head>
<body style="background-color:#00a459;">
	<div id="header">
		<img src="http://localhost/SysDevProject/public/img/dunes.png">

		<h1>Welcome To Kadija's Online Food Shop</h1>
</div>
		<div id="temp" style="visibility: hidden;tab-size: 4;"></div>
		<nav>
			<span1>&emsp;&emsp;Welcome Guest</span1>

			<div id="items">
			<a href="home_page.html">
				<!--image of house next to "home" -->
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  				<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  				<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
				</svg>
			Home</a> 

  			<a href="cart_page.html">
  				<!--image of cart next to "cart" -->
  				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  				<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
				</svg>
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
  					'<button type="button">Sign in</button>'+
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
					'<label for="telephone">Telephone</label><br>' +
  					'<input type="telephone" id="telephone" name="Telephone" value=""align="right" placeholder="(123)-456-7890">'+
  					'<br><br><label for="homeaddress">Home Address</label>'+
  					'<input type="textarea" id="homeaddress" name="Homeaddress" value=""align="right" placeholder="Enter Your Home Address..">'+
					'<br><br><label for="emailaddress">Email Address</label>'+
  					'<input type="emailaddress" id="emailaddress" name="Emailaddress" value=""align="right" placeholder="Enter Your Email Address..">'+
					'<br><br><label for="password">Password</label>'+
  					'<input type="password" id="password" name="Password" value=""align="right" placeholder="Enter Your Password.."><br><br>'+
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
  					'<button type="button" onclick="resetPass();" id="resetButon">Send Reset Password Link</button><br><br>' +
  					'<button type="button" id="cancelButton" onclick="popin();">Cancel</button>' +
  					'</form>';

  					$("#temp").css({"background-color": "white", "font-size": "150%", "width" : "425px", "height" : "500px", "visibility" : "visible"});
  					count++;
  				}

  				function resetPass(){
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
  				}
				
			</script>
			
  			</div>
		</nav>
		
		
		<div class="newRow">
		<div id="header" class="col-1-2">
		<h1  id="underline">Cart List</h1>
		</div>
		
		
		<table class="table">
        <thead class="table-light">
        </thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scrop="col" colspan="2" class="text-center"> Actions</th>
            </tr>
        <tbody>
                <?php 
                    foreach($data as $food){
                        echo"<tr>";
                        echo"<td>$food->foodName</td>";
                        echo"<td>$food->unitPrice</td>";
                        echo"<td>
                            <button id='addQuantity' name='addQuantity' class='btn btn-dark'><a href='/SysDevProject/cart/addQuantity/$food->item_id'> + </a></button>
                            <label name='quantityValue'>".$food->quantity."</label>
                            <button id='decreaseQuantity' name='decreaseQuantity' class='btn btn-dark'><a href='/TermProject/userCart/decreaseQuantity/$food->item_id'> - </a></button>
                            </td>";
                        echo"<td>
                        <button id='removeProduct' name='removeProduct' class='btn btn-danger'><a href='/SysDevProject/cart/removeItem/$product->item_id'> Remove Item </a></button>
                        </td>";
                        echo"</tr>";
                    }
                ?>
        </tbody>
    </table>
		
		<div id="header" class="col-1-2">
		
			<div class="container">
			<br><br>
				
				<p> Cart <span style="float : right;"> Total </span> </p>

					<hr width="100%">
					
					
				
			</div>
			
			<div class="white-box">
    
					<p>Total Amount</p>
					<hr width="100%">
					<br><br><br>
					<hr width="100%">
					
					<center><button class="button">Accept</button></center>
					
				
					
			</div>
		
		</div>
		
		</div>
		
	
		
		
		
</body>
</html>