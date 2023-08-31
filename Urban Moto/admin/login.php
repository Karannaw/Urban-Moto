<?php
session_start();
include("../common/dbconnect.php");
$error = '';
if(isset($_POST['btn_login']))
{
$emailid =$_POST['emailid'];
$password =$_POST['password'];
echo $sql = "select * from user where emailid='$emailid' and password='$password'";
$q =mysqli_query($con,$sql);
if(mysqli_num_rows($q)>0)
{
$r = mysqli_fetch_array($q);
echo $_SESSION['uid'].$_SESSION['uid'] = $r['id'];
$_SESSION['emailid'] = $r['emailid'];

header("location:index.php");
}
else
{
$error= '<div class="alert alert-danger">
  <strong>Error!</strong> Invalid Username or Password.
</div>';

}

}

?>

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin </title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <h2>Urban Motors</h2>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
<?php
echo $error;
?>

                                <form role="form" action="login.php" method="post">
                                    <hr />
                                    <h5 style="color:red;text-align:center;font-size: 20px;">Enter Details to Login</h5>
                                       <br>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="emailid" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"   aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="password"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">

                                            <span class="pull-right">
                                                   <a href="#" >Forgot password ? </a> 
                                            </span>
                                        </div>
                                     
                                     <button type="submit" name="btn_login" class="btn btn-primary ">Login Now</button>
                                    <hr />
                                    Click Here To Go To <a href="../index.php">Website Home Page</a> 
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>