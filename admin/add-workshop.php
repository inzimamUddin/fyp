<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if($_POST['submit'])
{
$name=$_POST['wn'];
$ownername=$_POST['on'];
$address=$_POST['wa'];
$contact=$_POST['cn'];
$latitude=$_POST['lat'];
$longitude=$_POST['long'];

$query="insert into  add_workshop (name,ownername,address,contact,latitude,longitude)
 values('$name','$ownername','$address','$contact','$latitude','$longitude')";
$result=mysqli_query($conn,$query);
if($result){
	echo "the data inserted successfully";
}
else{
	echo "data not inserted";
}

}

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
	<title>Add Courses</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Add Workshop </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add workshop</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">workshop name </label>
												<div class="col-sm-8">
													<input type="text" value="" name="wn"  class="form-control"> </div>
											</div>


											<div class="form-group">
									<label class="col-sm-2 control-label">Owner Name</label>
									<div class="col-sm-8">
									<input type="text" class="form-control" name="on" value="" >
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-2 control-label">workshop address</label>
												<div class="col-sm-8">
	<input type="text" class="form-control" name="wa" id="wa" value="" required="required">
						 
												</div>
											</div>
                                    <div class="form-group">
									<label class="col-sm-2 control-label">contact number</label>
									<div class="col-sm-8">
									<input type="text" class="form-control" name="cn" value="" >
												</div>
											</div>




											<div class="form-group">
									<label class="col-sm-2 control-label">latitude</label>
									<div class="col-sm-8">
									<input type="text" class="form-control" name="lat" value="" >
												</div>
											</div>

											<div class="form-group">
									<label class="col-sm-2 control-label">longitude</label>
									<div class="col-sm-8">
									<input type="text" class="form-control" name="long" value="" >
												</div>
											</div>




												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="submit detail">
												</div>
											</div>

										</form>

									</div>
								</div>
									
							
							</div>
						
									
							

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

</script>
</body>

</html>