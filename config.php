<?php
$username="root";
$password="";
$server="localhost";
$db="workshop_system";

$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
    ?>
   
    <script>
    alert('connection successfull');
    </script>
     <?php
}
else{
    echo "conncection failed";
}






?>