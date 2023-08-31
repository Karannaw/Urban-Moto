<?php
include("common/dbconnect.php");

$msg = '';

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$emailid = $_POST['emailid'];
$pid = $_POST['pid'];
$contact = $_POST['contact'];
$message = $_POST['message'];


$sql = "insert into enquiry(name,emailid,contact,message,isread,pid) values('$name','$emailid','$contact','$message','Unread','$pid')";
mysqli_query($con,$sql);
header('location:productdetail.php?pid='.$pid.'&act=1');
}



if(isset($_REQUEST['pid']) && $_REQUEST['pid']!='')
{
	$id = $_REQUEST['pid'];
	$sql = "select * from product where id = '$id'";
	$pq = mysqli_query($con,$sql);
	if(mysqli_num_rows($pq)>0)
	{		
		$pr1 = mysqli_fetch_array($pq);
	}else
	{
		
		header("location:index.php");
	}
	
}



if(isset($_REQUEST['act']) && $_REQUEST['act']=='1')
{
$msg = '<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Thank you for sending Enquiry.
</div>';
}

?>



<!DOCTYPE html>
<html>
<head>
<title>Urban Moto</title>
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
<link href="css/enquiry.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="css/custom.css" rel="stylesheet">

<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->

<!--
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
-->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.pr1eventDefault();
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

<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Product Detail</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="pr1oducts">
		<div class="container">
		
		<?php
		echo $msg;
		?>
		
			<div class="agileinfo_single">
				
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="upload/<?php echo $pr1['image']; ?>" style=" border: 4px solid #c7254e;" class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<h2><?php echo $pr1['productname']; ?></h2>
					
				<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">Rs. <?php echo  $pr1['price'];?> </span></h4>
						</div>
						
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p><?php echo $pr1['description'];?> </p>
					</div>
					</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


					<br><br><br>
					<hr>
<!-- Enquiry -->								
								
								<div class="enquiry" id="enquiry">
<h1 style= "font-size:35px; text-align: center; color: #000; position: relative; text-transform: uppercase;">
<center>Enquiry</center>
</h1>
    <div class="row">
		
        <form action="productdetail.php" method="post">
            <div class="inputBox">
                <input  name="name" placeholder="Name" required=" ">
                <input  type="email"  name="emailid" placeholder=" Email" required=" ">
            </div>
            <div class="inputBox">
                <input type="tel"  name="contact" placeholder=" Mobile number" required=" ">
			<input type="hidden" value="<?php echo $pr1['id'];?>" name="pid" >
            <input  name="message" placeholder="Address" required="" cols="30" rows="10">
</div>
			<input type="submit" name="submit" value="Send">
			<br><br><br>
				</form>
			</div>
		
    
</section>
			
</div>
<!-- Enquiry -->

<!-- //footer -->
<?php
include('common/footer.php');
?>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon 
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextpr1ev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

</body>
</html>