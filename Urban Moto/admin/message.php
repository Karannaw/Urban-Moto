<?php
include('../common/dbconnect.php');
include('admin_common/loginverify.php');
$msg = '';


if(isset($_REQUEST['action']) && $_REQUEST['action']=="delete")
{
	$id= (isset($_REQUEST['id']))?$_REQUEST['id']:'';
	$sql ="delete from message where id ='$id'";
	mysqli_query($con,$sql);	
	header("location:message.php?act=2");
}


if(isset($_REQUEST['act']) && $_REQUEST['act']=='2')
{
$msg = '<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Message Deleted Successfully.
</div>';
}




?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
	<!--Data Table-->
	<link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
   <?php
   include("admin_common/header.php");
   ?>
	
		
		<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Message</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
         
            <div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Message
                        </div>
                        <div class="panel-body">
						<?php
						echo $msg;
						?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           
                                            <th>Sender</th>
                                            <th>Mobile Number</th>
											<th>Email Id</th>
                                            <th>Subject</th>
											<th>Status</th>
											<th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
         <tbody>
		 <?php
		 $sql = "select * from message";
		 $q = mysqli_query($con,$sql);
		 if(mysqli_num_rows($q)>0)
		 {
		   while($r = mysqli_fetch_array($q))
		   {
		 ?>
                    <tr >
                  
                    <td><?php echo $r['name'];?></td>
                    <td><?php echo $r['mobileno'];?></td>
					<td><?php echo $r['emailid'];?></td>
                    <td><?php echo $r['subject'];?></td>
					<td><?php echo $r['isread'];?></td>
					<td><?php echo $r['senddate'];?></td>
					
                    <td class="center">
		<a href="viewmesage.php?id=<?php echo $r['id']; ?>" class="myasimple" title="Edit">
		 view
		</a>
		&nbsp;
		<a onclick="return confirm('Are you sure you want to delete this record?');" href="message.php?id=<?php echo $r['id'];?>&action=delete" class="myasimple" title="Delete">
	     <img src="img/delete.png" />
	    </a>
	        		</td>
                    </tr>
           <?php
		   }
		   
		 }
		   ?>                             
        </tbody>
                                </table>
                            </div>
						
						</div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
               
			
			</div>
			  <!-- /. ROW  -->
			  

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
   
   <?php
   include("admin_common/footer.php");
   ?>
   
   
   
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
     <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/newcustom.js"></script>
	
	<script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>


</body>
</html>
