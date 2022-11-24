<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/registration.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?AIzaSyB8EhMSQ1AHQYD3jR0ZATjtPmn7okVIXbc&callback=initMap&v=weekly&channel=2"
        async></script>

</head>


    <body>





<?php
include 'config.php';
if(isset($_POST['submit'])){
$username=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['pass']);
$cpassword=mysqli_real_escape_string($con,$_POST['cpass']);

$pass= password_hash($password, PASSWORD_BCRYPT);
$cpass= password_hash($cpassword, PASSWORD_BCRYPT);

$emailquery="select * from registration where email='$email'";
$query=mysqli_query($con,$emailquery);

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
 $iquery = mysqli_query($con,$insertquery);
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






        
        <div class="container">
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
                            <a href="form.php"><h6 class="text-center mb-2">Already have an account</h6></a>

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
  
    </body>

</html>
