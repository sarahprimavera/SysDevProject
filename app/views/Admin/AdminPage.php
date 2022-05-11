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
<body>

	<style type="text/css">
		
/*navbar elements */
nav{
	background-color: #f7d000; /* makes the nabar yellow */
	width: 100%;
	height: 55px;
    line-height: 2.5; /*puts text in the center*/
	font-family: Arial, Helvetica, sans-serif;
	color: black;
	-webkit-touch-callout: none;
    -webkit-user-select: none; 
    -khtml-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
}

/*adds margins around the navbar items 
  and make the color of the text black  */
nav #items a{
	font-family: Arial, Helvetica, sans-serif;
	color: black;
	font-size: 20px;	
    margin-right: 0px;
    padding-right: 30px;
    padding-left: 30px;
    padding-top: 15px;
    padding-bottom: 18px;
}

/*remove the line under the navbar items on hover */
nav #items a:hover{
	background-color: #ceaf08;
	text-decoration: none;
}


nav #items a: hover{
	font-family: Arial, Helvetica, sans-serif;
	color: black;
	font-size: 20px;
	text-decoration: none;
}


/*text in the image "welcome to..."*/
h1{
  /*center text in image*/
  position: absolute;
  top: 50%;
  left: 50%;
  /* prevent user from highlighting text in the image */
   -webkit-touch-callout: none;
    -webkit-user-select: none; 
    -khtml-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
}


#header{
	position: relative;
  	color: white;
}

/*make sure image fits in page*/
#header img{
	width: 100%;
	height: 200px;
}

/*center text in image*/
#header h1{
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: Arial, Helvetica, sans-serif;
}

/* manages the items in the navbar */
#items{
	float: right; /*put the items to the right of the bar*/
	text-decoration: none;
	list-style: none; /*remove line under links*/
}

span{
	line-height: 4;
}

.fa-caret-down {
	margin-left: 55%!important;
}

#sideBar{
	width: 15%!important;
	left: 0;
	z-index: -1;
	-webkit-touch-callout: none;
    -webkit-user-select: none; 
    -khtml-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
}

#sideBar a:hover{
	text-decoration: none;
}

a:hover, a:active, a:focus{
	text-decoration: none;
}

table{
	background-color: white;
	width: 100%;
	margin-right: auto;
	margin-left: auto;
}


td, tr{
	border: 2px solid black;
	width: 25%;
	text-align: center;
}

#title{
	left: 50%;
	text-decoration: underline;
	color: white;
}

#active, #active:hover{
	background-color: gray!important;
	cursor: default;
}

section p:nth-child(odd){
	background-color: #c4c4c4;
}

p button{
	height: 40px;
}

p button:nth-child(odd){
	background-color: #34ff34;
	margin-right: 10px;
}

p button:nth-child(even){
	background-color: red;
}

input[type=time]{
	margin-left: 100px;
}

#calendarInterface{
	background-color: white;
	width: 300px;
	margin-left: 40%;
}

.calendar {
  position: relative;
  width: 300px;
  background-color: #fff;
  box-sizing: border-box;
  box-shadow: 0 5px 50px rgba(#000, 0.5);
  border-radius: 8px;
  overflow: hidden;
}

.calendar__date {
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(25px, 1fr));
  grid-gap: 10px;
  box-sizing: border-box;
}

.w3-sidebar{
	position: absolute!important;
}
	</style>

	<body style="background-color:#00a459;">
	<div id="header">
		<img src="dunes.png">

		<h1>Welcome To Kadija's Online Food Shop</h1>
	</div>
		<div id="temp" style="visibility: hidden;tab-size: 4;"></div>
		<nav>
			<span1>&emsp;&emsp;Welcome Kadija</span1>

			<div id="items">
			<a href="/SysDevProject/Home""><i class="fa fa-home" aria-hidden="true"></i> Home</a> 

  			<a  href="#" onclick="popin();"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
  		</div>

	<div class="w3-sidebar w3-light-grey w3-bar-block" id="sideBar" style="width:25%">
		<p style="margin:1.2em;"></p>
  <a id="active" class="w3-bar-item w3-button">Calendar</a>
  <a href="EditMenu" class="w3-bar-item w3-button">Edit Menu</a>
  <a href="OrderView" class="w3-bar-item w3-button">View Orders</a>
  <a class="w3-bar-item w3-button" onclick="showStatus();">View Status<i class="fa fa-caret-down"></i></a>

  <section></section>
</div>

<div style="margin-left:15%">
<div class="w3-container">
	<center>
	<h2 id="title">Calendar</h2>
	</center>
</div>
<form id="calendarInterface">
	<br>

	<br>
	<input type="time" id="appt" name="appt" required>
       <br>
       <br>
	<input type="time" id="appt" name="appt" required>
       </form>
</div>

<script type="text/javascript">
	var i = 0;
	var arrow = document.getElementsByClassName("fa fa-caret-down")[0];
	var state = document.getElementsByTagName("section")[0];

	function showStatus(){

	if(i == 0){
	 arrow.style.transform = "rotateX(180deg)";
	i++;	

	//open state (pop up the status)
	//make the button id the name (php)
	state.innerHTML = "<p>name<br>food<br><button>accept</button><button>decline</button><br></p><br><br><br>";
	
	}else{
	 arrow.style.transform = "rotateX(0deg)";
	i--;

	//close state (hides the status)
	state.innerHTML = "";
	}

	}
	
</script>

</body>
</html>