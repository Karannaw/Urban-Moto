<?php
include("common/dbconnect.php");

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

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Product</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- groceries --->
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Categories</h2>
					<ul class="cate">
					<?php 
				$sql = "select * from category ";
				$pq = mysqli_query($con,$sql);
				while($pr = mysqli_fetch_array($pq))
				{
				
				?>
						<li><a href="category.php?cat=<?php echo $pr['id'] ;?>"><i class="fa fa-arrow-right" aria-hidden="true"></i> 
						<?php echo $pr['categoryname']; ?>
						</a></li>
				<?php
				}
				?>	
						
					</ul>
				</div>																																												
			</div>
			
			
			
			
			
			
			<div class="col-md-8 products-right">
				
			<div class="agile_top_brands_grids">
			
				
				
				<?php 
				$sql = "select * from product where status = '1'";
				$pq = mysqli_query($con,$sql);
				while($pr = mysqli_fetch_array($pq))
				{
				
				?>
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="productdetail.php?pid=<?php echo $pr['id'];?>"><img title=" " alt=" " src="upload/<?php echo $pr['image']; ?>" style="width:170px;height: 100px; "></a>		
												<p><?php echo $pr['productname']; ?></p>
												<h4>Rs. <?php echo $pr['price']; ?> </h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
													<fieldset>
														
														<a href="productdetail.php?pid=<?php echo $pr['id'];?>"><input type="button" name="submit" value="View Detail" class="button"></a>
													</fieldset>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				?>			
					<div class="clearfix"> </div>
					</div>
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>
			
<!--- groceries --->

<?php
include('common/footer.php');
?>

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
<!-- //here ends scrolling icon -->
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
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

</body>
</html>