<?php
include("common/dbconnect.php");

$msg = '';

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$mobileno = $_POST['mobileno'];
$emailid = $_POST['emailid'];
$subject = $_POST['subject'];
$senddate = date('d F Y');
$message = $_POST['message'];


$sql = "insert into message(name,mobileno,emailid,subject,message,isread,senddate) values('$name','$mobileno','$emailid','$subject','$message','Unread','$senddate')";
mysqli_query($con,$sql);
header('location:contact.php?pid='.$pid.'&act=1');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Urban Motors</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<!-- //js 
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<?php
	include('common/header.php');
	
	
	?>

	
<!-- //header -->
<!-- navigation -->
	
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Feedback</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- contact -->
<section class="contact" id="contact">
<h1 style= "font-size:35px; text-align: center; color: #000; padding-bottom: .5em; position: relative; text-transform: uppercase;">
<center>Feedback Form</center>
</h1>
    <div class="row">

        <div class="image">
            <img src="images/image1/feedback.png" alt="" width="250" height="350">
        </div>

        <form action="contact.php" method="post">
            <div class="inputBox">
                <input  id="input-25" name="name" placeholder=" Enter your name" required=" ">
                <input  type="email" id="input-27" name="emailid" placeholder=" Enter your email" required=" ">
            </div>
            <div class="inputBox">
                <input type="tel" id="input-26" name="mobileno" placeholder=" Enter your mobile number" required=" ">
                <input type="text" d="input-27" name="subject" placeholder="Subject" required=" ">
            </div>
            <textarea p name="message" placeholder="Enter your message here" required="" cols="30" rows="10"></textarea>
			<input type="submit" name="submit" value="Submit">
				</form>
			</div>
		
    
</section>
			
</div>
<!-- contact -->

<!-- //footer -->
<?php
include('common/footer.php');
?>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->


<!-- //main slider-banner --> 

</body>
</html>