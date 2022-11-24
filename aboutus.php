<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/about.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/fontawesome-free-6.2.0-web/css/all.css">
  
    <title>About Us</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

<div class="container-fluid">

<!-- Logo text. -->
        <a class="navbar-brand" href="javascript:void(0)"><h1>WIS</h1></a>
       

        <button class="navbar-toggler " data-toggle="collapse" data-target="#mynavbar">
              <span class="navbar-toggler-icon"></span>

            </button>


      
<!-- Search form -->
    <div class="collapse navbar-collapse" id="mynavbar">
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="button">Search</button>
        </form>

<!-- User links -->
        <ul class="navbar-nav me-auto" style="margin-left:50px;">
          <li class="nav-item">
            <a class="nav-link" href="index.php">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.php">ContactUs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">services</a>
          </li>
          
        </ul>
        <button class="btn btn-primary" type="button" style="margin-top:5px;"><a href="logout.php"><h6 id="logout" style="color:white;">Logout</h6></a></button>
    </div>
</div>
</nav>




<div class="about-section">
  <h1>About Our Website</h1>
  <p>Workshop information system is a network of workshops
     you can take advantage of our expert engineering 
knowledge and certified maintenance and repair services. 
List of workshops with contact details divided per area:</p>
 
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/foundd.jpg" alt="Jane" style="width:100%;  height: 15vw;
    object-fit: cover;">
      <div class="container">
        <h2>Inzimam Uddin</h2>
        <p class="title">Developer</p>
        <p></p>
        <p>inzimam2942@gmail.com</p>
        <p><a href="mailto:inzimam2942@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/director.jpg" alt="Mike" style="width:100%;  height: 15vw;
    object-fit: cover;">
      <div class="container">
        <h2>Muhammad Ilyas</h2>
        <p class="title">junior Developer</p>
        <p>milyas@gmail.com</p>
        <p><a href="mailto:milyas@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/supervisorr.png" alt="John" style="width:100%; height: 15vw;
    object-fit: cover;">
      <div class="container">
        <h2>Nasir Mehmood</h2>
        <p class="title">Supervisor</p>
        <p></p>
        <p>nasirmehmood@gmail.com</p>
        <p><a href="mailto:nasirmehmood@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>