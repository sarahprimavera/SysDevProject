<!DOCTYPE html>
<html>
<style type="text/css">

li:first-child{
	margin-left: 0;
	position: relative;
}

li {
	display: inline-block;
	margin-left: 28px;
	position: relative;
	}

li > a {
	font-size: 14px;
	text-transform: uppercase;
	letter-spacing: .5px;
	text-decoration: none;
	color: white;
	font-weight: bold;
}
.sub-nav {
background: black;
border-radius: 0px;
box-shadow: 0 10px 8px 0 rgba(0,0,0,0.2);
display: none;
right: 390px;
padding: 16px;
position: absolute;
top: 100%;
width: 130px;

	}

	#services:hover .sub-nav{
	 display: flex;
	}

	.sub-nav.col {
		display: flex;
		flex-direction: column;
		flex: 1;
		max-width: 0%;
	}

</style>


<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<a class="navbar-brand" style="background-color:black;color: white;" href="/Main/Home">E-commerce project</a>
				<ul class="nav navbar-nav">
      				<li><a href="/Main/timeline">Timeline</a></li>
     				<li><a href="/Contact/contactus">Contact us</a></li>
     				<li><a href="/Site/MainPage">Store Page</a></li>
					<li><a href="/Contact/report">Report</a></li>
					<li><a href="#" style="color:white">Admin</a></li>
     			</ul>
	</nav>
	<center>
	<h1 style="position: center; color:red">ADDING AN ITEM</h1>
	<h4 style="color:red">Welcome to the Item Adding Page </h4>
	<p style="color:red">This is the Admin Page where you can add an item</p>
	</center>
	
	<h2 style=" left: 0; width: 100%; background-color: black; color: white; text-align: center;">Options </h2>
	<center>
	<li><a href="/Admin/AdminPage">Main Admin Page</a></li>
	<li><a href="/Admin/AdminReport">View Reports</a></li>
	<li><a href="/Admin/AdminUser">View Users</a></li>
	<li><a href="/Admin/AdminItem">View Items</a></li>>

	<h2 style="color:red">ADD ITEMS HERE</h2>

	<form class="px-4 py-3" method="post" action="" onsubmit="submitForm(event)" style="width:50%;">
	<div class="form-group">
        <label for="profileinput">Item picture</label>
        <input type='file' name='picture' class='form-control' />
    </div>
    <div class="form-group">
        <label for="nameinput">Item Name</label>
        <input name="name" type="text" class="form-control" id="nameinput" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="descinput">description</label>
        <textarea name="description" type="text" class="form-control" id="descinput" placeholder="Description"></textarea>
    </div>
    <div class="form-group">
        <label for="priceinput">Price</label>
        <input name="price" type="number" class="form-control" id="priceinput" placeholder="Price">
    </div>

    

    <button type="submit" name='register' class="btn btn-primary">Register</button>
    </form>
