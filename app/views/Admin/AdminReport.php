<?php require APPROOT . '/views/includes/header.php'; 
?>

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
				<ul class="nav navbar-nav";>
      				<li><a href="/Main/timeline">Timeline</a></li>
     				<li><a href="/Contact/contactus">Contact us</a></li>
     				<li><a href="/Site/MainPage">Store Page</a></li>
					<li><a href="/Contact/report">Report</a></li>
					<li><a href="#" style="color:white">Admin</a></li>
     			</ul>
	</nav>
	<center>
	<h1 style="position: center; color:red">REPORT MANAGEMENT</h1>
	<h4 style="color:red">Welcome to the Reports Management Page </h4>
	<p style="color:red">This is the Admin Page that allows the admin to see any reports made by the users</p>
	</center>
	
	<h2 style=" left: 0; width: 100%; background-color: black; color: white; text-align: center;">Options </h2>
	<center>
	<li><a href="/Admin/AdminPage">Main Admin Page</a></li>
	<li><a style="color:gray;">View Reports</a></li>
	<li><a href="/Admin/AdminUser">View Users</a></li>
	<li><a href="/Admin/AdminItem">View Items</a></li>

	<h2 style="color:red">List of Reports</h2>
		<table style="background-color: white; width: 50%;">
		<tr>
			<td>ID</td>
			<td>Content</td>
			<td>Actions</td>
		</tr>

		<?php

			echo"<tr>";
			if($data["reports"] != null) {
			foreach($data["reports"] as $report){

				echo"<td>$report->user_id</td>";
       			echo"<td>$report->report_content</td>";
       			echo"<td>
                <a href='/Admin/removeReport/$report->report_id'>Remove</a>
                </td>";
                echo"</tr>";
       			}
				} else {
					echo "No reports were made at this time";
			}
		?>


	</table>

	</center>
	
	