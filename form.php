
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
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="CSS/form.css">
  <link rel="stylesheet" href="">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



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
include'config.php';
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];

$email_search="select * from registration where email='$email'";
$query=mysqli_query($con,$email_search);

$email_count=mysqli_num_rows($query);
if($email_count){
  $email_pass=mysqli_fetch_assoc($query);
  $db_pass=$email_pass['password'];

$_SESSION['name']=$email_pass['name'];

  $pass_decode=password_verify($password,$db_pass);
  if($pass_decode){
    ?>
   
    <script>
    alert('login sucessfull');
    location.replace("index.php");
    </script>
     <?php
  }else{
    ?>
   
    <script>
    alert('incurrect password');
    </script>
     <?php
  }
}
else{
  ?>
   
  <script>
  alert('invalid email');
  </script>
   <?php
}
}

?>




  </div>

  <div class="container-fluid">
    <div class="row w-100 d-flex justify-content-center align-items-center main_div">
      <div class="col-12 col-lg-6 col-md-8 col-xxl-5">
        <div class="card py-3 px-2" style="margin-top:-20% ;">
          <p class="text-center  text-capitalize"><span>contact with us</span></p>
          <div class="row mx-auto">

            <div class="col-4">
              <a href="https://www.instagram.com/inximam_uddin/" target="_blank"> <i
                  class="fa-brands fa-instagram"></i></a>

            </div>
            <div class="col-4">
              <a href="https://www.facebook.com/inximam.uddin" target="_blank"><i class="fa-brands fa-facebook"></i></a>

            </div>

            <div class="col-4">
              <a href="https://bit.ly/3bUH2d6" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a>
            </div>
          </div>

          <div class="division">
            <div class="row">
              <div class="col-6 mx-auto mt-3">
                <span class="main-heading">Login Form</span>
              </div>
            </div>
            <form class="myform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

              <div class="mb-3">
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
              </div>
              <div class="mb-3">
                <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
              </div>
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="">
                    <label class="form-check-label">Remember me</label>
                  </div>
                </div>
                <div class="col-md-6 col-12 bn text-capitalize"><a href="registration.php" class="register">Register Here</a></div>
              </div>
          </div>
          <div class="my-3">
            
            
            <button type="submit" class="btn btn-block btn-primary btn-lg" name="submit" >
              <small><i class="far fa-user pr-2" ></i> Login</small>
            </button>
          </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  </div>

</body>

</html>
