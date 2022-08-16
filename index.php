
<?php 
  include 'connect.php';
  if (isset($_POST['submit'])) {
  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$comment = $_POST['comment'];

  	$sql ="insert into `hsd`(name,email,comment) values('$name','$email','$comment')";
  	$result = mysqli_query($con,$sql);
  	if (!$result) {
  		die(mysqli_error($con));
  	}
  }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
         
	<title>HS Diagnostic Center</title>
	<link rel="stylesheet" type="text/css" href="style.css">

       <link rel="icon" href="images/l9.png" type="image/png">

       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
</head>
<body>
      <section id="banner">
      	<div class="ll"><img class="logo" src="images/l9.png"><h2 class="logo_title">H.S Diagnostic</h2></div>
      	<div class="text">
      		<h1>H.S Diagnostic Center</h1>
      		<h2>SRL Diagnostic's Trusted Agency</h2>
      	</div>
      	<div class="btn">
      		<a href="#"><span></span>Find Out</a>
      		<a href="https://www.srlworld.com/" target="blank"><span></span>Read More</a>
      	</div>
      </section>

      <div id="slider">
      	<nav><ul>
      		<li><a href="#banner">Home</a></li>
      		<li><a href="#service">Services</a></li>
      		<li><a href="#testimonial">About Us</a></li>
      		<li><a href="#feture">Features</a></li>
      		<li><a href="#footer">Contact Us</a></li>

      	</ul></nav>
      </div>
      <div id="menubutton">
      	<img src="images/icon.png" id="menu">
      </div>

      <!---------------------------Feature---------------------------->

    <section id="feture">
	   <div class="title-text">
	   	<p>FEATURES</p>
	   	<h1>Why Choose Us</h1>
	   </div>

	   <div class="Feature-box">
	   	<div class="Features">
	   		<h1>Experienced Staff</h1>
	   		<div class="Features-des">
	   		 <div class="Features-icon">
	   		 	<img src="images/l3.png">
	   		 </div>
	   		 <div class="Features-txt">
	   		 	<p>We have best experienced staff.And all the staff is highly qualified,our staff behave like your mother.ypu are in good hand.</p>
	   		 </div>	
	   		</div>
	   		<h1><a href="booking.php" class="booking" target="blank">Pre Booking Online</a></h1>
	   		<div class="Features-des">
	   		 <div class="Features-icon">
	   		 	<img src="images/l7.png">
	   		 </div>
	   		 <div class="Features-txt">
	   		 	<p>We have best experienced staff.And all the staff is highly qualified,our staff behave like your mother.ypu are in good hand.</p>
	   		 </div>	
	   		</div>
	   		<h1>Affordable Cost</h1>
	   		<div class="Features-des">
	   		 <div class="Features-icon">
	   		 	<img src="images/l8.png">
	   		 </div>
	   		 <div class="Features-txt">
	   		 	<p>We have best experienced staff.And all the staff is highly qualified,our staff behave like your mother.ypu are in good hand.</p>
	   		 </div>	
	   		</div>
	   	</div>
	   	<div class="Features-img">
	   		<img src="images/f1.jpg">
	   	</div>
	   </div>
    </section>
    
    <!-----------------------SERVICE-------------------------->

 <section id="service">
 	<div class="title-text">
	   	<p>SERVICES</p>
	   	<h1>We Make Better Health</h1>
	   </div>
	   <div class="service-box">
	   	<div class="single-service"><img src="images/s1.jpg">
	   		<div class="overlay"></div>
	   		<div class="service-des">
	   			<h3>Blood Test</h3>
	   			<hr>
	   			<p>This is the all types of services you get form us. we do it very carefully, We have highly qualified technician so you all in good hand.</p>
	   		</div>
	   	</div>
	   	<div class="single-service"><img src="images/s2.jpg">
                 <div class="overlay"></div>
                 <div class="service-des">
                 	      <h3>Urine test</h3>
                 	      <hr>
                 	      <p>This is the all types of services you get form us. we do it very carefully, We have highly qualified technician so you are all in good hand.</p>
                 </div>
	   	</div>
	   	<div class="single-service"><img src="images/s3.jpg">
	   		<div class="overlay"></div>
	   		<div class="service-des">
	   			<h3>Heart</h3>
	   			<hr>
	   			<p>This is the all types of services you get form us. we do it very carefully, We have highly qualified technician so you are all in good hand.</p>
	   		</div>
            </div>
	   	<div class="single-service"><img src="images/s4.jpg">
                  <div class="overlay"></div>
                  <div class="service-des">
                  	<h3>CT Scan</h3>
                  	<hr>
                  	<p>This is the all types of services you get form us. we do it very carefully, We have highly qualified technician so you are all in good hand.</p>
                  </div>
	   	</div>
	   </div>
 </section>
 
 <!--------------------Testimonials------------------------->

<section id="testimonial">
	<div class="title-text">
	   	<p>TESTIMONIAL</p>
	   	<h1>What Client Says!</h1>
	   </div>
	   <div class="wrapper">
	   	<div class="write-comment"><h2>Write your Comment Here</h2>
                <form method="post" action="" class="form">

                	<div class="input">
                	    <label for="name">Name</label>
                	    <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
                	    <label for="email">Email</label>
                	    <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                	    <textarea id="comment" name="comment" placeholder="Share Your Experience"></textarea>
                	    <button class="btnn" id="submit" name="submit">Submit</button>
                  </div>
                </form>
	   	</div>
	   	<hr>
	   	<div class="read-comment"><h2>Clients Reviews</h2>	
                <div class="user-comment">
                	<div class="comment">
                		<div class="comment-logo"><img src="images/m2.png">Mr.Basanta Ghoshal<br>
                              
                              <!--<?php 
                   $sql="Select * from `hsd`";
                   $result=mysqli_query($con,$sql);
                   if($result){
                   	while($row=mysqli_fetch_assoc($result)) {
                   		
                   		$name=$row['name'];
                   		$email=$row['email'];
                   		$comment=$row['comment'];
                   		  echo ' 
                   		         <img src="m2.png">'.$name.' <br>
                   		         <img src="m1.png">'.$email.'<br>
                   		         <img src="m3.png">'.$comment.'
                   		         ';
                   	}
                   }
	 			?>-->
                        
                        <img src="images/m1.png">basantaghoshal80@gamil.com<br>
                		<img src="images/m3.png">I get good and well services form hs
                		diuagonastioc center
                		and i realy stisfy with this pathological center
                	</div>
                	</div>
                	<div class="comment">
                		
                		<div class="comment-logo"><img src="images/m2.png">Mr.Basanta Ghoshal<br>
                		<img src="images/m1.png">basantaghoshal80@gamil.com<br>
                		<img src="images/m3.png">I get good and well services form hs
                		diuagonastioc center
                		and i realy stisfy with this pathological center</div>
                	</div>
                	<div class="comment">
                		<div class="comment-logo"><img src="images/m2.png">Mr.Basanta Ghoshal<br>
                		<img src="images/m1.png">basantaghoshal80@gamil.com<br>
                		<img src="images/m3.png">I get good and well services form hs
                		diuagonastioc center
                		and i realy stisfy with this pathological center</div>
                	</div>
                	<button class="btnn2"><a href="display.php" target="blank">View More</a></button>
                </div>

	   	</div>
	   </div>
	   
</section>

<!--------------------------Footer---------------------------->
<section id="footer">
	<img src="images/l10.png" class="footer-img">
	<div class="title-text">
	   	<p>CONTACT</p>
	   	<h1>Visit Our Office</h1>
	   </div>

	   <div class="footer-row">
	   	<div class="footer-left">
	   		<h1>Opening Hours</h1>
	   		<p><img src="images/f3.png">Monday to Friday - 9am to 9pm</p>
	   		<p><img src="images/f3.png">Saturday and sunday - 8am to 11pm</p>
	   	</div>
	   	<div class="footer-right">
	   		<h1>Get In Touch</h1>
	   		<p>Gurap beltola nb tower 1st floor<img src="images/f5.png"></p>
	   		<p>hsdiagonistic@gmail.com<img src="images/f4.png"></p>
	   		<p>789019822<img src="images/f6.png"></p>
	
	   	</div>
	   </div>
	   <div class="social-links">
	   	<a href="#" target="blank"><img src="images/ss1.png"></a>
	   	<a href="#"target="blank"><img src="images/ss2.png"></a>
	   	<a href="#"target="blank"><img src="images/ss3.png"></a>
	   </div>

</section>
<div class="copyrights">
	   	<p>All &#174Rights Reserved For HS Diagonastic Center<br>
	   	    Create and Developed By Basanta Ghoshal</p>
	   </div>








      <script>
      	var menubutton = document.getElementById("menubutton")
      	var slider = document.getElementById("slider")
      	var menu = document.getElementById("menu")
      	    slider.style.right = "-250px";

      	menubutton.onclick = function(){
      		if (slider.style.right == "-250px") {
      			slider.style.right = "0";
      			menu.src = "images/l4.png";
      		}
      		else{
      		    slider.style.right = "-250px";
      		    menu.src = "icon.png";	
      		}
      	}
      </script>
</body>
</html>