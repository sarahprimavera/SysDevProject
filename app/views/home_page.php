<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="/SysDevProject/public/css/mainpagecss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
			<?php
			if (isLoggedIn()) {
			echo '<span1>&emsp;&emsp;Welcome   '. $_SESSION['user_username'].'</span1>';
			} 
			else {
			echo '<span1>&emsp;&emsp;Welcome Guest</span1>';
			}
			?>
			<div id="items">
			<a href="/SysDevProject/Home">

				<!--image of house next to "home" -->
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  				<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  				<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
				</svg>
			Home</a> 

  			<a href="/SysDevProject/userCart/displayCart">

  				<!--image of cart next to "cart" -->
				<i class = "fa-fa-home" aria-hidden="true"></i>
  				<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
				</svg>

		Cart</a>
		<?php
		if (isLoggedIn()) {
		echo '<a class="nav-link" href="/SysDevProject/Login/logout"><i class="fa-solid fa-sign-out"></i> Logout  '. $_SESSION['user_username'].'</a>';
		echo '<a class="nav-link" href="/SysDevProject/Order/status/'. $_SESSION['userId'].'">Order Status</a>';
		} 
		else {
		echo '<a  href="/SysDevProject/Login/index">Login</a>';
		}
		?>
							
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
                foreach($data['foods'] as $food){
                    echo"<tr>";
                    echo "<td></td>";
                    echo"<td>$food->foodName</td>";
					echo"<td>$food->description</td>";
                    echo"<td>$food->price</td>";
                    echo"<td>
                    <button id='addToCart' name='addToCart' style='background-color:#000000;'><a href='/SysDevProject/userCart/addItem/$food->foodId'>Add to cart </a></button>
                    </td>";
                    echo"</tr>";
                }
        
            ?>
        </tbody>
    </table>
<!-- 	
		<div class="col-md-4 column productbox" >

			<?php 

				// foreach($data['food'] as $food){
				// 	echo "<img src='https://www.cesarsway.com/wp-content/uploads/2019/09/AdobeStock_195276899-1024x681.jpeg.webp' class='img-responsive'>";
				// 	echo "<div class='producttitle'>$food->foodName </div>";
				// 	echo "<div class='productprice'><div class='pull-right'>";
				// 	echo "<a href='/SysDevProject/Home/AddCart/$food->foodId' class='btn btn-danger btn-sm' role='button'>Add to cart</a>";
				// 	echo "</div>";
				// 	echo "<div class='pricetext'>$food->price</div>";
				// 	echo "<p><a href='#'> View</a></p>";
				// 	//echo "</div>";
				// }
			?>

        
            ?>

</body>
