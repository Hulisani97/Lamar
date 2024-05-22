<?php
session_start();
include('server/getcontact.php');
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>NSSA STORE</title>
			<link rel="stylesheet" type="text/css" href="assets/styles/styledefault.css">
			<link rel="stylesheet" type="text/css" href="assets/styles/stylecart.css">
			<link rel="stylesheet" type="text/css" href="assets/styles/styletrackorderbanner.css">
			<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300&display=swap" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		</head>
	  <body>

	  <div class="header">
		  <div class="container">
		    <div class="navbar">
			    <div class="logocontainer">
				    <a href="index.php"><img class="logo" src="assets/images/newstufflogo_pic.png" alt="Snow" align="left"></a>
			    </div>
			    <nav>
						<ul id="menuitems">
							<li class="exitmenutogglebtn" id="nav-exit" onclick="menutoggle()"><a href="#">X</a></li>
							<li class="active"><a href="index.php"><img id="navbaricons" src="assets/images/homeicon_pic.png" alt="Snow">Home</a></li>
							<li class="active"><a href="about.php"><img id="navbaricons" src="assets/images/abouticon_pic.png" alt="Snow">About</a></li>
							<li class="active" id="departmentitems" onclick="departmentsmenutoggle()"><a href="#"><img id="navbaricons" src="assets/images/productsicon_pic.png" alt="Snow">Shop Departments</a></li>
							<li class="active"><a href="contact.php"><img id="navbaricons" src="assets/images/contacticon_pic.png" alt="Snow">Contact</a></li>
							<li class="active"><a href="#"><img id="navbaricons" src="assets/images/resellericon_pic.png" alt="Snow">Sell on NSSA</a></li>
							<li class="active"><a href="#"><img id="navbaricons" src="assets/images/careersicon_pic.png" alt="Snow">Careers</a></li>
				    </ul>
					</nav>
					<!---------------Account Image---------------->
					<a href="login.php" style="margin-right: 3%;"><img id="accountpic" class="accountpic" src="assets/images/accounticon_pic.png" alt="Snow" width="30px" height="30px" align="left"></a>
					<!---------------Cart Image---------------->
					<a href="cart.php"><img id="cart-pic" class="cartpic" src="assets/images/cartpic.png" alt="Snow" width="30px" height="30px" align="left">
					<?php if(isset($_SESSION['totalquantity']) && $_SESSION['totalquantity'] != 0) { ?>
						<span class="cartquantity"><?php echo $_SESSION['totalquantity']; ?></span>
					<?php } ?></a>

					<!-- Menu icon -->
					<img src="assets/images/menu.png" alt="Snow" class="menu-icon" onclick="menutoggle()" align="center">
				</div>

				<!-------- Departments Navbar ------->
				<div class="departmentsnavbar" id="departmentsnavbar">
					<nav class="departmentsnav">
						<ul class="departmentsnavitems">
						  <li class="departmentsactive" onclick="closeallmenutoggle()"><a id="departmentsexitmenutogglebtn" href="#">Close</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Automotive"><img id="navbaricons" src="assets/images/" alt="Snow">Automotive</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=DIY"><img id="navbaricons" src="assets/images/" alt="Snow">DIY</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Baby, Toddler & Kids"><img id="navbaricons" src="assets/images/" alt="Snow">Baby, Toddler & Kids</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Health, Beauty & Personal Care"><img id="navbaricons" src="assets/images/" alt="Snow">Health, Beauty & Personal Care</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Sports"><img id="navbaricons" src="assets/images/" alt="Snow">Sports</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Outdoors"><img id="navbaricons" src="assets/images/" alt="Snow">Outdoors</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Healthy Living"><img id="navbaricons" src="assets/images/" alt="Snow">Healthy Living</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Clothing, Shoes & Accessories"><img id="navbaricons" src="assets/images/" alt="Snow">Clothing, Shoes & Accessories</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Electronics & Devices"><img id="navbaricons" src="assets/images/" alt="Snow">Electronics & Devices</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Garden, Pool & Patio"><img id="navbaricons" src="assets/images/" alt="Snow">Garden, Pool & Patio</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Home & Appliances"><img id="navbaricons" src="assets/images/" alt="Snow">Home & Appliances</a></li><li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Home & Furniture"><img id="navbaricons" src="assets/images/" alt="Snow">Home & Furniture</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Household Essentials"><img id="navbaricons" src="assets/images/" alt="Snow">Household Essentials</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Office, Stationary & Books"><img id="navbaricons" src="assets/images/" alt="Snow">Office, Stationary & Books</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Party Ocassions"><img id="navbaricons" src="assets/images/" alt="Snow">Party Ocassions</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Pets"><img id="navbaricons" src="assets/images/" alt="Snow">Pets</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Liquor"><img id="navbaricons" src="assets/images/" alt="Snow">Liquor</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Sweets & Snacks"><img id="navbaricons" src="assets/images/" alt="Snow">Sweets & Snacks</a></li>
						</ul>
					</nav>
				</div>

				<!---- Voice Recognition AI Search --->
				<div class="voicerecognitioncontainer">
          <img src="assets/images/voicerecognitionicon_pic.png" class="btn" id="voicerecognitionbtn"/>
					<p id="result"></p>
					<p id="voicerecognitionhelplink">Need Help?<a href="voicerecognitionhelp.php">Voice Command List</a><p>
        </div>

				<!------ Js for Voice Recognition Output ----->
				<script src="js/getvoicerecognitionoutput.js"></script>

				<!------ Js for Toggle Menu ----->
				<script src="js/getheadertogglemenu.js"></script>
			</div>
		</div>
<!------------- Website Messages----------->
<p style="color: red; font-weight: bold; text-align: center" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
<p style="color: green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>


<!---------Contact-Page--------->

<!DOCTYPE html>
<html>
	<style>	
		
		body {
			margin: 0;
			padding: 0;
			background-color: white; /* set the background color to white */
		}

		.center-heading{
			text-align: center;
			color: skyblue	;
			font-weight: bold;
			border-radius: 50%;
			border: 3px solid lightblue;
			padding: 10px;
			display: inline-block;
			margin: 0 auto;
			margin-bottom: 20px;
			display: table;
			font-size: 24px;
		}

        /* CSS styles for the sections */
        .section-container {
            display: flex; /* Use flexbox */
        }

        .section {
            flex: 1; /* Each section takes equal space */
            border: 5px solid white; /* Light brown border color */
            padding: 20px; /* Add some padding inside the sections */
			background-color: white;
			width: 400px;
			height: 400px;
        }

        .section h2 {
            font-size: 24px; /* Set the font size to 12 pixels */
            font-family: Georgia, serif; /* Set the font family to Georgia */
			color: gray;
			text-align: center;
			background-color: orange;
        }

		.section h4 {
            font-size: 14px; /* Set the font size to 12 pixels */
            font-family: Georgia, serif; /* Set the font family to Georgia */
			color: gray;
			text-align: center;
			background-color: lightblue;
        }

		.section p {
            font-size: 13px; /* Set the font size to 11 pixels */
            font-family: Georgia, serif; /* Set the font family to Georgia */
			color: gray;
			margin-bottom: 10px;	
			text-align: center;
			margin-top: 10px;	
        }

		.section p1 {
            font-size: 14px; /* Set the font size to 11 pixels */
            font-family: Georgia, serif; /* Set the font family to Georgia */
			color: gray;
			margin-bottom: 10px;	
			text-align: center;
			margin-top: 10px;	
        }

		/* CSS styles for hyperlinks */
        a {
            color: darkblue; /* Dark red color for hyperlinks */
            text-decoration: none; /* Underline the hyperlinks */
        }

        a:hover {
			background-color: #f2f2f2;
      		padding: 5px 10px;
      		text-decoration: underline;
            color: #CD0000; /* Darker red color on hover */
        }
	
	
		form {
			width: 300px;
			margin: 0 auto;
			background-color: #f0f8ff; /* light blue background */
    		padding: 20px; /* add some padding */
    		border-radius: 5px; /* rounded corners */
		}

		label {
			display: block;
			margin-top: 10px;
		}

		input[type="text"],
		input[type="email"],
		textarea {
			width: 100%;
			padding: 8px;
			font-size: 14px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		textarea {
			height: 120px;
		}

		input[type="submit"] {
			display: block;
			width: 100%;
			margin-top: 10px;
			padding: 8px;
			font-size: 14px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

    </style>

<section>
    <h3 class="center-heading">Contact Us</h3>	


    <div class="section-container">
        <div id="section1" class="section">
            <h2>Sellers Market</h2>
            <p>This is our market plartform wherein you get to submit the products you want to sell. We basically screen it and value it for others to purchase.
			We might take some time to respond on your uploaded goods as we get a lot of products from sellers daily. 
			A well as a lot of reviews and comment on the values permitted on each product by out marketiong Experts.</p>
            <p><a href="https://poe.com/">Sellers_Market</a>.</p>
        </div>

		<div id="section1" class="section">
            <h2>Collections and returns</h2>
            <p> We grace you with points of pickups and returns at any specified working hours depending on the point of reference. 
			Our Points are located in the Sandton Region which is the main offices for our organization.
			We can refer your pickup or collection accoreding to your current location and we can base them from the following points which are our storage locations :</p>
			
			<p></p>
			<h4>SOWETO</h4>
			<p1> <li>Weekdays (Working Hours) - 08h00-17h00</li>
			<li>Weekends (Working Hours) - 07h45-14h00</li>
			<li>Holidays (Working Hours) - Closed</li></p1>
			
			<p></p>
			<h4>KRUGERSDORP</h4>
			<p1> <li>Weekdays (Working Hours) - 08h00-17h00</li>
			<li>Weekends (Working Hours) - 07h45-14h00</li>
			<li>Holidays (Working Hours) - Closed</li></p1>
			
			<p></p>
			<h4>HARTFIELD</h4>
			<p1> <li>Weekdays (Working Hours) - 08h00-17h00</li>
			<li>Weekends (Working Hours) - 07h45-14h00</li>
			<li>Holidays (Working Hours) - Closed</li></p1>
			
            <p><a href="https://poe.com/">More info.</a>.</p>
        </div>

        <div id="section2" class="section">
            <h2>Offices</h2>
            <p>For face to face queries and site visit we have two main offices which operate in prescribed business hours.</p>
			<p>They are situated in the following parts of the country: </p>
			
			<p></p>
			<h4>SOWETO</h4>
			<p1> <li>Weekdays (Working Hours) - 08h00-16h00</li>
			<li>Weekends (Working Hours) - 08h00-13h00</li>
			<li>Holidays (Working Hours) - 09h00-14h00</li></p1>
			
			<p></p>
			<h4>KRUGERSDORP</h4>
			<p1> <li>Weekdays (Working Hours) - 24/7</li>
			<li>Weekends (Working Hours) - 08h00-16h00</li>
			<li>Holidays (Working Hours) - 08h00-16h00</li></p1>

			<p><a href="https://poe.com/">Active Teams</a>.</p>
		</div>
    </div>
</html>

</section>

<section>
	<hr class="mx-auto">
    <div class="contactpagecontainer">
      <div class="googlemapscontainer">
        <iframe class="googlemaps" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=4708%20Mhunti%20Street%20Johannesburg+(MR)&amp;t=p&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
        </iframe>
        <a href='https://www.easybooking.eu/'>Fetching Google Maps...</a> 
        <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=5c8a8dd1d18f664e1a4704f0a64fff04109a8dd8'>
        </script>
      </div>
      <div class="contactpage">
        <p>Send Any Queries And We Will be In Touch Soon.</p><br>
		
		<form action="contact.php" method="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="message">Message:</label>
		<textarea id="message" name="message" required></textarea>

		<input type="submit" value="Submit">
		</form><br><br>
    
	</div>
    </div>
  </div>
</section>
<?php
include('layouts/footer.php');
?>