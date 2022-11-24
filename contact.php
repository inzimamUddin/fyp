<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="CSS/fontawesome-free-6.2.0-web/css/all.css">
  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
    src="https://maps.googleapis.com/maps/api/js?AIzaSyB8EhMSQ1AHQYD3jR0ZATjtPmn7okVIXbc&callback=initMap&v=weekly&channel=2"
    async
  ></script>

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
        <form class="d-flex" id="search">
          <input class="form-control me-2"id="searchbar" type="text" placeholder="Search Location">
          <button class="btn btn-primary" type="button">Search</button>
        </form>

<!-- User links -->
        <ul class="navbar-nav me-auto" style="margin-left:39px;">
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
            <a class="nav-link" href="services.php">Services</a>
          </li>
          
        </ul>
        <button class="btn btn-primary" type="button" style="margin-top:5px;"><a href="logout.php"><h6 id="logout" style="color:white;">Logout</h6></a></button>
    </div>
</div>
</nav>



    <!--Section: Contact v.2-->
<div class="container-fluid" style="position:relative;height:100wh;">

<section class="mb-4" id="main">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center py-4" id="head">Contact us</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5" id="text">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mailto:inzimam2942@gmail.com" method="POST" style="margin-left:30px";>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name"name="name"class="form-control" autocomplete="off">
                        <label for="name" class="">Your name</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control"autocomplete="off">
                        <label for="email" class="">Your email</label>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control" autocomplete="off">
                        <label for="subject" class="">Subject</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                    </div>
                    <div class="text-center text-md-left">
           <input type="submit"class="btn btn-primary" value="send your message" style="margin-top:0px;">
        </div>
                </div>
           
            </div>
            <!--Grid row-->  
           
        </form>

        
        <div class="status"></div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0" id="list">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Govt College chitral</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>03431927343</p>
                <a href="tel:03431927343">CLICK TO CALL</a>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>inzimam2942@gmail.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
</div>
<!--Section: Contact v.2-->
</body>
</html>