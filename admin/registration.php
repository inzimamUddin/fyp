<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for registration

?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>User Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/registration.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>


</head>
<body>
	
	
		<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/sidebar.php');?>






    <?php
//include 'config.php';
if(isset($_POST['submit'])){
$username=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['pass']);
$cpassword=mysqli_real_escape_string($conn,$_POST['cpass']);

$pass= password_hash($password, PASSWORD_BCRYPT);
$cpass= password_hash($cpassword, PASSWORD_BCRYPT);

$emailquery="select * from registration where email='$email'";
$query=mysqli_query($conn,$emailquery);

$emailcount=mysqli_num_rows($query);
if($emailcount>0){
    ?>
    <script>
    alert('email already exists must add different email address');
    </script>
     <?php
}else{
if($password===$cpassword){

$insertquery="insert into registration(name,email,password,cpassword)
 values('$username','$email','$pass','$cpass')";
 $iquery = mysqli_query($conn,$insertquery);
 if($iquery){
    ?>
    <script>
    alert('data insert properly');
    </script>
     <?php
 }else{
    ?>
   
    <script>
    alert('data not inserted');
    </script>
     <?php
 }

}else{
    ?>
   
    <script>
    alert('password are not matching');
    </script>
     <?php
}
}

}

?>

		
		
		
				

				

			<div class="container-fluid">
            <div class="myCard">
                <div class="row">
                    <div class="col-md-6">
                        <div class="myLeftCtn">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="myForm text-center">
                                    <header>Create New Account</header>
                                    <div class="form-group">
                                        <i class="fas fa-user"></i>
                                        <input type="text" class="myInput" placeholder="user name" id="username" name="name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <i class="fas fa-envelope"></i>
                                        <input type="text" name="email" class="myInput" placeholder="email" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" name="pass" class="myInput" placeholder="password" id="password"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <i class="fas fa-user"></i>
                                        <input type="password" name="cpass" class="myInput" placeholder="retype password"
                                            id="password" required>
                                    </div>

                                    <div class="form-group">
                                        

                                    </div>
                                    <input type="submit" class="butt" value="CREATE ACCOUNT" name="submit">

                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="myRightCtn">
                            <div class="box"><header>Welcome to sign in page</header>
                           <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                            maxime optio, ratione nihil accusamus repellendus exercitationem 
                            maiores nulla, illum omnis blanditiis 
                           magni quae consequuntur modi iste odio quos, reprehenderit molestiae.</p>
                        
                           <input type="button" class="butt_out" value="learn More">
                            </div>
                        </div>
                    </div>
                </div>
</div>
            </div>


			


		
		
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>

</html>