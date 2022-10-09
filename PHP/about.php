<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="..//project/css/about.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About Us</title>
</head>
<body>
    <div class="header">
        <h1>ExploreIndia</h1>
        <ul class= "nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="Destinations.php">Destinations</a></li>
          <li class="active"><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a id="user" href="logout.php"><?php session_start(); 
            if(isset($_SESSION['user'])){
              echo "<i class='fa fa-sign-out' aria-hidden='true'></i>".$_SESSION['user'];
            } 
            else{
                echo "<a href='login.html'>Login</a>";
            }?></a></li>
        </ul>
        </ul>
    </div>
    <h1 id="head1">Why to Choose Us??</h1>
    <div class="north">
           <p> "ExploreIndia" is a Professional Travel Agency Platform. Here we will provide you all the Information regarding Indian's popular destinations and Tour packages, which you will like very much.
            We're dedicated to providing you the best of Travel Plans, with a focus on dependability and Reasonable Tour packages.
            We're working to turn our passion for Travel Agency into a booming online website. We hope you enjoy our Travel Agency as much as we enjoy offering them to you.
            We will keep posting more important posts on my Website for all of you. Please give your support and love.<br><br>
            Thanks For Visiting Our Site.</p>
            <div class="button"><a href="contact.php">Contact Us</a></div>
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
</body>
</html>