<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['name'])){
  header('location:form.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/addlocation.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    
</head>
<body id="sticky">



<div class="row" id="background">
          <div class="col">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

 <div class="container-fluid" style="margin-left: 0%; ">


              <a href="#" class="navbar-brand">
                  <img src="images/logo3.png" class="img-thumbnail" class="img-fluid" style="width:40% ;margin-left: 5%;" alt="">
              </a>

            <button class="navbar-toggler " data-toggle="collapse" data-target="#mynavbar">
              <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
              <ul class="navbar-nav justify-content-end text-center">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="form.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="registration.php" class="nav-link">Register</a></li>
                <a href="welcome.php"></a>
            </ul>

            <form class="form-inline" action="">
              <input type="search" class="form-control" placeholder="seacrh">
              <button class="btn btn-outline-success">search</button>

            </form>

            <a href="logout.php"><button class="btn btn-outline-success" style="margin-top:30%; margin-left:30%;">logout</button>
</a>
                    </div>

            </div>

              
          </nav>
          </div>
        </div>




    <section class="vh-100 bg-image"
  style="background-image: url('images/workshop.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5" style="height:100%">
        
              <h2 class="text-uppercase text-center mb-2">Hello  <?php echo $_SESSION['name']; ?>  enter information</h2>

              <form>

                <div class="form-outline mb-2">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your workshop name</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">contact  number</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="text" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">location</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="text" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">address</label>
                </div>
              

                <div class="d-flex justify-content-center">
                  <button type="button"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit your detail</button>
                </div>

               

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>