<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="/SysDevProject/public/css/mainpagecss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel = "icon" href = 
		"https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Africa_%28orthographic_projection%29.svg/1200px-Africa_%28orthographic_projection%29.svg.png" 
        type = "image/x-icon">!-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css%22%3E

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css%22%3E
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E


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
			<a href="/SysDevProject/Home">
			<i class = "fa-fa-home" aria-hidden="true"></i>
				<!--image of house next to "home" -->
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  				<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  				<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
				</svg>
			Home</a> 

  			<a href="/SysDevProject/views/Cart/cart">
  				<!--image of cart next to "cart" -->
				<i class = "fa-fa-home" aria-hidden="true"></i>
  				<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
				</svg>
		Cart</a>
		<a href="/SysDevProject/Home/aboutus">About</a> 
		<?php
		if (isLoggedIn()) {
		echo '<a class="nav-link" href="/SysDevProject/Login/logout"><i class="fa-solid fa-sign-out"></i> Logout  '. $_SESSION['user_username'].'</a>';
		} 
		else {
		echo '<a  href="/SysDevProject/Login/index">Login</a>';
		}
		?>
		<!--<a  href="/SysDevProject/Login/index">Login</a>-->


  			<!--<script type="text/javascript">
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
  					add.innerHTML = '<br><form id = "send" method = "post">' +
  					'<center>Create an Account</center><br><br>'+
  					'<label for="firstname">First Name</label><br>' +
  					'<input type="firstname" id="firstname" name="Firstname" value=""align="right" placeholder="Enter Your First Name..">'+
  					'<br><br><label for="lastname">Last Name</label><br>'+
  					'<input type="lastname" id="lastname" name="Lastname" value=""align="right" placeholder="Enter Your Last Name..">'+
					'<br><br><label for="emailaddress">Email Address</label><br>'+
  					'<input type="emailaddress" id="emailaddress" name="Emailaddress" value=""align="right" placeholder="Enter Your Email Address..">'+
					'<br><br><label for="password">Password</label><br>'+
  					'<input type="password" id="password" name="Password" value=""align="right" placeholder="Enter Your Password..">'+
					'<br><br><label for="repassword">Re-Enter Password</label><br>'+
  					'<input type="password" id="repassword" name="RePassword" value=""align="right" placeholder="Re-Enter Your Password.."><br><br>'+
  					'<button type="submit" name="createB" id="createButton" form = "send">Create</button>'+  
					'<button type="button" id="cancelButton" onclick="popin();">Cancel</button>'+
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
				
			</script>!-->
  			</div>

</nav>


<table class="table">
        <thead class="table-light">
        </thead>
            <tr>
                <th scope="col">Food</th>
                <th scope="col">Food Name</th>
				<th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scrop="col" colspan="2" class="text-center"> Actions</th>
            </tr>
        <tbody>
            <?php 
                foreach($data['foods'] as $foods){
                    echo"<tr>";
                    echo "<td></td>";
                    echo"<td>$foods->foodName</td>";
					echo"<td>$foods->description</td>";
                    echo"<td>$foods->price</td>";
                    echo"<td>
                    <button id='addToCart' name='addToCart' style='background-color:#000000;'><a href='/SysDevProject/Home/AddCart/$foods->foodId'>Add to cart </a></button>
                    </td>";
                    echo"</tr>";
                }
        
            ?>
        </tbody>
    </table>
<!-- 	
		<div class="col-md-4 column productbox" >
		<?php 
				// foreach($data['foods'] as $foods){
				// 	echo "<img src='https://www.cesarsway.com/wp-content/uploads/2019/09/AdobeStock_195276899-1024x681.jpeg.webp' class='img-responsive'>";
				// 	echo "<div class='producttitle'>$foods->foodName </div>";
				// 	echo "<div class='productprice'><div class='pull-right'>";
				// 	echo "<a href='/SysDevProject/Home/AddCart/$foods->foodId' class='btn btn-danger btn-sm' role='button'>Add to cart</a>";
				// 	echo "</div>";
				// 	echo "<div class='pricetext'>$foods->price</div>";
				// 	echo "<p><a href='#'> View</a></p>";
				// 	//echo "</div>";
				// }
			?>
		</div> -->


		<!--<div>
			<form method="POST">
				<input type="text" id="searchBar" name="searchBar" placeholder="Search available Mauritanian Dish">
				<button type="submit" id="searchButton" name="searchButton" class='btn btn-dark'> <a href="/SysDevProject/Home/searchProduct">Search </a> </button>  
			</form>
		</div>-->

		<?php 
		//<path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
		//<path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
		//<svg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
		//</svg>
               /* foreach($data['foods'] as $foods){
                    echo"<tr>";
                    //echo "<td>$foods->image</td>";
                    echo"<td>$foods->foodName</td>";
                    echo"<td>$foods->price</td>";
                    echo"<td>
					<p><a id='box' href='Home/viewProduct/$foods->foodId'> 
			   		<svg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
					<path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
					<path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
					</svg>
					View</a></p>
                    </td>";
                    echo"<td>
                    <form method='POST'>
                    <button id='addToCart' name='addToCart' class='btn btn-dark'><a href='Home/AddCart/$foods->foodId'>Add to cart </a></button>
                    </form>
                    </td>";
                    echo"</tr>";
                }*/

				//original front end code for home page
				/*<div class="moveleft">
		<div class="box-wrapper">
		
			<div class="col-2-3">
			<div class="newRow">
			<div class="middle-column">
            <div id="box5">
               <img src="food1.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #1</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
				<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
				<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
				</svg>
				View</a></p>
            </div>
			
            <div id="box6">
               <img src="food2.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #2</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
				<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
				<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
				</svg>
				View</a></p>
            </div>
			
            <div id="box7">
               <img src="food3.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #3</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
				<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
				<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
				</svg>
				View</a></p>
            </div>
			</div>
			</div>
			</div>
			<div class="col-2-3">
			<div class="newRow">
			<div class="middle-column">
            <div id="box8">
               <img src="food1.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #4</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
				<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
				<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
				</svg>
				View</a></p>
            </div>
            <div id="box9">
               <img src="food2.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #5</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
				<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
				<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
				</svg>
				View</a></p>
            </div>
            <div id="box10">
               <img src="food3.jpg" alt="" /> <hr style="width:100%">
               <h2>Dish #6</h2>
               <p>Whatever description about the food in this box here</p>
               <p>$20.00</p>
               <p><a id="box" href="#"> 
			   <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
				<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
				<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
				</svg>
				View</a></p>
            </div>
			</div>
		 </div>
		 </div>
		 </div>
		 </div>*/
        
            ?>
</body>
</html>