<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel = "icon" href = 
"https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Africa_%28orthographic_projection%29.svg/1200px-Africa_%28orthographic_projection%29.svg.png" 
        type = "image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="admincss.css">
</head>
<body style="background-color:#00a459;">
        <div id="header">
                <img src="dunes.png">
                <h1>Welcome To Kadija's Online Food Shop</h1>
        </div>
                <div id="temp" style="visibility: hidden;tab-size: 4;"></div>
                <nav>
                        <span1>&emsp;&emsp;Welcome Kadija</span1>
                        <div id="items">
                        <a href="/SysDevProject/Home"><i class="fa fa-home" aria-hidden="true"></i> Home</a> 
                        <a  href="#" onclick="popin();"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                </div>
        <div class="w3-sidebar w3-light-grey w3-bar-block" id="sideBar" style="width:25%">
                <p style="margin:1.2em;"></p>
  <a href="AdminPage.html" class="w3-bar-item w3-button">Calendar</a>
  <a id="active" href="#" class="w3-bar-item w3-button">Edit Menu</a>
  <a  class="w3-bar-item w3-button">View Orders</a>
  <a class="w3-bar-item w3-button" onclick="showStatus();">View Status<i class="fa fa-caret-down"></i></a>
  <section></section>
</div>
<div style="margin-left:15%">
<div class="w3-container">
        <center>
        <h2 id="title">Edit</h2>

        <form method="post">
        <br>
        <br>
        <label>choose Image:</label>
        <input type="file" name="" accept="image/gif, image/jpeg, image/png" >
        <br>
        <label>Name:</label>
        <br>
        <input type="text" name="name" placeholder="Name">
        <br>
        <label>Description:</label>
        <br>
        <textarea placeholder="description" align="right"></textarea>
        <br>
        <label>Price:</label>
        <br>
        <input type="Text" name="price" pattern="^\d*(\.\d{1,2})?$" align="right">
        <br>
        <input type="submit" name="submit">
        <br>
        </form>
        </center>

</div>