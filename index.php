<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Nasa Imatges</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">	
	

	</head>
	<body>
	<!-- Just an image -->
<nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand" href="https://www.nasa.gov/" target="_blank">
    <img src="img/nasa.png" width="60" height="50" alt="" loading="lazy">
  </a>
  <h3 class="text-white">Albert Sans 2020</h3>
</nav>
<h1  class=" text-center mt-5 ">Mira l'imatge de la NASA del dia que escullis !</h1>
		
		 	<div class="container mt-5" >
			 <div class="row">
		 		<div class="col-md-6 mx-auto">
		 		<form method="get" action="index.php">
		 	<div class="form-group mt-5 ">
		 		 <input style="width:500px;" class="form-control" type="date" name="date" id="">
		 	</div>
		    
		 	<button  style="width:500px" class="btn btn-primary  ">Mira</button>	
		 		</form>
				 </div>
				 </div>
		 	</div>
		 	<?php 
		 	if (isset($_GET['date'])) {
		 
		 	$date=$_GET['date'];
		 	$json=file_get_contents('https://api.nasa.gov/planetary/apod?hd=true&date='.$date.'&api_key=EHZbR4a10KClhG0Qbz1r10k8fIMqo5DDuzG8hBHN');
		 	$results=json_decode($json,TRUE);

		 	echo "  
<div class='container p-5 bg-light rounded mt-5'>
			<img class='img-thumbnail' src='".$results['hdurl']."' width='100%' height='50%' alt=''>
			<h3 class='mt-3 text-center'>".$results['title']."</h3>
			<p>
				".$results['explanation']."
			</p>
			";if (isset($results['copyright'])) {echo "<p><b>Photographer</b> :".$results['copyright'];}

			echo"</p>
			<p><b>Date</b> :".$results['date']."</p>
		</div>


		 	";

		 	
		 	

		 	
		 	

}

		 	?>
		
		

<div class="container mt-5">
<div class="row mb-5">
<div class="col-md-4 mx-auto">
<a href="../index.html" class="btn btn-warning btn-block">inici</a>
</div>
</div>
</div>





		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></body>
</html>