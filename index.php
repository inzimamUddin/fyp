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
    <title>bootstrap</title>
    <link rel="stylesheet" href="admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
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
        <button class="btn btn-primary" type="button" style="margin-top:5px;"><a href="logout.php"><h6 id="logout">Logout</h6></a></button>
    </div>
</div>
</nav>


   
        
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9" id="map"></div>
   <div class="col-lg-3 col-md-12 py-3 px-4" style="background-color:#4345 ;">

  <marquee behavior="" direction="left">
  <h4>Available Workshops</h4>
  
  </marquee>
   
<table>
<tbody>

<?php	
include'config.php';
$selectquery="select * from add_workshop";
$query=mysqli_query($con,$selectquery);
$nums=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query))
	 {
?>
<tr>
  <td><?php echo $res['address']?></td>
  <td><a href="full-profile.php?id=<?php echo $row->id;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
</tr>

<?php

   }
?>

										
								
</tbody>

</table>


   </div>

   <div id="infowindow"></div>
   </div>
</div>


   
  
</body>

<script>
 
    
    var marker;
      function initialize() {
        var infoWindow = new google.maps.InfoWindow;
        
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
 
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var bounds = new google.maps.LatLngBounds();

        // Retrieve data from database
        <?php
            $query = mysqli_query($con,"select * from add_workshop");
            while ($data = mysqli_fetch_array($query))
            {
                $nama = $data['address'];
                $latitude = $data['latitude'];
                $longitude = $data['longitude'];
                
                echo ("addMarker($latitude, $longitude, '<b>$nama</b>');\n");                        
            }
          ?>
          
        // Proses of making marker 
       
        function addMarker(lat, lng, info,) {
            var mark = new google.maps.LatLng(lat, lng);
            bounds.extend(mark);
            var markerr = new google.maps.Marker({
                map: map,
                position: mark
            });   
                
            map.fitBounds(bounds);
            bindInfoWindow(markerr, map, infoWindow, info);
         }
         
        
        // Displays information on markers that are clicked
        function bindInfoWindow(markerr, map, infoWindow, html) {
          google.maps.event.addListener(markerr, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, markerr);
            
          });
        }
 
        }
        
      google.maps.event.addDomListener(window, 'load', initialize);
    
    </script>



  
    
   <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
    src="https://maps.googleapis.com/maps/api/js?AIzaSyB8EhMSQ1AHQYD3jR0ZATjtPmn7okVIXbc&callback=initMap&v=weekly&channel=2"
    async
  ></script>


</html>