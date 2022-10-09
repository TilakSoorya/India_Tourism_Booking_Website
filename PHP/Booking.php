<?php

session_start();
session_regenerate_id();

include 'exploreindia.php';

if(isset($_POST['submit'])){
    $u_name=$_POST['u_name'];
    $email=$_POST['email'];
	$_SESSION['mail'] = $email;
    $phno=$_POST['pno'];
	$_SESSION['phone'] = $phno;
    $date=$_POST['date'];
	$_SESSION['date'] = $date;
    $nop=$_POST['nop'];
	$_SESSION['ppl'] = $nop;
	$tour=$_POST['tour'];
	$_SESSION['tour']=$tour;
    $pkg=$_POST['pkg'];
	$_SESSION['package'] = $pkg;
    if($pkg == "5 days 4 Nights"){
        $total=1000+(3000*$nop*2);
    }else if($pkg == "10 days 9 Nights"){
        $total=1000+(3000*$nop*4);
    }else if($pkg == "15 days 14 Nights"){
        $total=1000+(3000*$nop*6);
    }
    $_SESSION['ttl']=$total;
	$sql_e = "SELECT * FROM bookings WHERE email ='$email' AND date='$date'";
  	$res_e = mysqli_query($connect, $sql_e);
	
	if(isset($_SESSION['user'])){
		if(mysqli_num_rows($res_e) > 0)
		{
        	echo '<script>alert("Your have already booked")</script>';
		}
		else{
			$insert = "INSERT INTO bookings VALUES ('','$u_name','$email','$phno','$tour','$date','$nop','$pkg','$total');";
    		$result= mysqli_query($connect,$insert);
    		if($result){
				echo "<script> alert ('Booked Successfully')
				window.location.replace('pay.php');</script>";
			}
    		else{
        		echo "<script> alert ('ERROR, Try Again!');</script>";
			}
    	}
	}
	else{
		echo '<script> alert ("Please Login to book your trip !!")
				window.location.replace("login.html");</script>';
	}
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="..//project/css/signup.css">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BOOKING</title>
</head>
<body>
	
	<div class="header">
        <h1>ExploreIndia</h1>
        <ul class= "nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="Destinations.php">Destinations</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
		  <li><a id="user" href="logout.php"><?php 
            if(isset($_SESSION['user'])){
              echo "<i class='fa fa-sign-out' aria-hidden='true'></i>".$_SESSION['user'];
            } 
            else{
                echo "<a id='user' href='login.html'>Login</a>";
            }?></a></li>
        </ul>
    </div>	
<div class="display">
  <div class="container">
	<div class="header1">
		<h2>Booking</h2>
	</div>
	<form action="" id="form" class="form"  method="post">
		<div class="form-control">
			<label>Username</label>
			<input type="text"  id="username" name="u_name" value="<?php if(isset($_SESSION['user'])){ echo $_SESSION['user'];} ?>" placeholder="Enter Your Name" autocomplete="off">
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error Msg</small>
		</div>
		<div class="form-control">
			<label>Email</label>
			<input type="Email"  id="email" name="email" placeholder="Enter your Email id" autocomplete="off">
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error Msg</small>
		</div>
		<div class="form-control">
			<label>Phone number</label>
			<input type="number"  id="phone" name="pno" placeholder="Enter your phone number" autocomplete="off">
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error Msg</small>
		</div>
		<div class="form-control">
			<label>Date</label>
			<input type="date"  id="date" name="date" placeholder="Enter The Travelling Date">
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error Msg</small>
		</div>
		<div class="form-control">
			<label>Number of Travellers</label>
			<input type="number"  id="nop" name="nop" placeholder="Enter the no. of travellers">
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error Msg</small>
		</div>
		<div class="form-control">
			<label>Tours</label>
			<select name="tour" id="tour">
				<option value="North Indian Tour">North Indian Tour</option>
				<option value="East Indian Tour">East Indian Tour</option>
				<option value="West Indian Tour">West Indian Tour</option>
				<option value="South Indian Tour">South Indian Tour</option>
			</select>
		</div>
		<div class="form-control">
			<label>Packages</label>
			<select name="pkg" id="pkg">
				<option value="5 days 4 Nights">5 days 4 Nights</option>
				<option value="10 days 9 Nights">10 days 9 Nights</option>
				<option value="15 days 14 Nights">15 days 14 Nights</option>
			</select>
		</div>

		<input type="submit" value="Submit" class="btn" name="submit">
    </form>
   </div>

	
   <footer class="footer">
        <div class="fcontainer">
            <div class="row">
                <div class="column">
                    <h4>Info</h4>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="terms.html">Privacy Policy</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Booking</h4>
                    <ul>
                        <li><a href="Booking.php">Booking</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="north.php">North India</a></li>
                        <li><a href="east.php">East India</a></li>
                        <li><a href="west.php">West India</a></li>
                        <li><a href="south.php">South India</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/login?lang=en"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        

    </footer>
<script>
const form = document.getElementById('form');
	const username = document.getElementById('username');
	const email = document.getElementById('email');
	const phone = document.getElementById('phone');
	const date = document.getElementById('date');
	const nop = document.getElementById('nop');

	//add event
	form.addEventListener('submit',(event) => {
		validate(event);
		})
	
	const isEmail = (emailVal) => {
		var atSymbol = emailVal.indexOf("@");
		if(atSymbol < 1) return false;
		var dot = emailVal.lastIndexOf('.');
		if (dot <= atSymbol + 2) return false;
		if (dot === emailVal.length-1) return false;
		return true;
}

	const validate = (event) => {
		const usernameVal = username.value.trim();
		const emailVal = email.value.trim();
		const phoneVal = phone.value.trim();
		const dateVal = date.value.trim();
		const nopVal = nop.value.trim();

	if (usernameVal === "") {
		setErrorMsg(username, 'username cannot be blank');
	} else if (usernameVal.length <= 2) {
		setErrorMsg(username, 'username min 3 char');
	} else{
		setSuccessMsg(username);
	}
	if (emailVal === "") {
		setErrorMsg(email, 'email cannot be blank');
	} else if (!isEmail(emailVal)) {
		setErrorMsg(email, 'Not a valid Email');
	} else{
		setSuccessMsg(email);
	}
	if (phoneVal === "") {
		setErrorMsg(phone, 'phone number cannot be blank');
	} else if ((phoneVal.length !== 10)) {
		setErrorMsg(phone, 'Not a valid phone number');
	} else{
		setSuccessMsg(phone);
	}
	if (dateVal === "") {
		setErrorMsg(date, 'date cannot be blank');
	} else{
		setSuccessMsg(date);
	}
	if (nopVal === "") {
		setErrorMsg(nop, 'Field cannot be blank');
	} else{
		setSuccessMsg(nop);
	}
}
	function setErrorMsg(input,errormsgs){
		const formControl = input.parentElement;
		const small = formControl.querySelector('small');
		formControl.className = "form-control error";
		small.innerText = errormsgs;
		event.preventDefault();
	}

	function setSuccessMsg(input) {
    	const formControl = input.parentElement;
		formControl.className = "form-control success";
	}
</script>	
</body>
</html>