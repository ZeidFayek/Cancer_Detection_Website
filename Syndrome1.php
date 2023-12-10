<?php
require_once('machine-learning1.php');
if(isset($_POST['submit-img'])){
    $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
    $dst_fname =  getcwd() . '/lung-images/' . time() . uniqid(rand()) . '.' . $extension;
    $dst_fname = str_replace('\\', '/', $dst_fname);
    move_uploaded_file($_FILES["img"]["tmp_name"],  $dst_fname);
    $result = classify_image($dst_fname);
}
// } else {
//     header("Location: Syndrome.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="ar-en" dir="ltr">
	<meta charset="utf-8">
	<head>
		<title>Cancereta</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/jpg" href="img/logo.png">
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">		
		<link href="css/bootstrap.min.css" rel="stylesheet">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/Syndrome.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/jquery.floatingscroll.css">  


	</head>
	<header>
		<div class="container ">
			<nav class="navbar navbar-expand-lg navbar-light bg-light py-1 position-fixed fixed-top w-100">
				  <div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">
							<li class="nav-item">
							  <a class="nav-link active" href="index.html"><img src="images/logo/image.png"></a>
							</li>
						</ul> 
					  <ul class="navbar-nav ms-auto  mb-lg-0">
							<li class="nav-item dropdown">
							  <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Home 
							  </a>
							  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="cancer.html">About Cancer</a></li>
								<li><a class="dropdown-item" href="doctor.html" target="_blank">Our doctors</a></li>
								<li><a class="dropdown-item" href="#international_link">International patient</a></li>
								<li><a class="dropdown-item" href="doctors_page.html">Online consultation</a></li>
								<li><a class="dropdown-item" href="doctors'page.html" target="_blank">Book now</a></li>
							  </ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#special_link" id="navbarDropdownMenuLink" id="special" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								   Specializations
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								  <li><a class="dropdown-item" href="cancerLung.html">Lung Cancer</a></li>
								  <li><a class="dropdown-item" href="#">Bowel cancer</a></li>
								  <li><a class="dropdown-item" href="#">Prostate and breast cancer</a></li>
								  <li><a class="dropdown-item" href="#">Pancreas cancer</a></li>
								  <li><a class="dropdown-item" href="#">Esophageal cancer</a></li>
								  <li><a class="dropdown-item" href="#">Liver Cancer</a></li>
								  <li><a class="dropdown-item" href="#">Bladder Cancer</a></li>
								  <li><a class="dropdown-item" href="#">brain cancer</a></li>
								  <li><a class="dropdown-item" href="#">bone cancer</a></li>
								</ul>
							</li>
							<li class="nav-item">
							  <a class="nav-link active" href="#Services-link">Services</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Detection 
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								  <li><a class="dropdown-item" href="Syndrome.html" target="_blank">Lung Cancer</a></li>
								  <li><a class="dropdown-item" href="#">Colon Cancer</a></li>
								</ul>
							  </li>
							<li class="nav-item">
							  <a class="nav-link active" href="#">Success stories</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link active" href="#">Blog</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link active" href="contactUs.html">Contact us</a>
							</li>
					  </ul>
					  <button type="button" class="btn btn-info mx-3" href="doctors'page.html" target="_blank">Book now</button>
		
					  <div class="btn-group">
						<button type="button" class="btn btn-info dropdown-toggle btn-hi" data-bs-toggle="dropdown" aria-expanded="false" id="nameUser">
						  <p id="signOut" class="d-inline"></p>
						  <script>
							var name = localStorage.getItem('nameUser')
							var n = name.split(" "); 
							document.getElementById('signOut').innerHTML ="Hi, "+n[0];
						  </script>
				  
					  </button>
					  <ul class="dropdown-menu">
						 <li><a id="signout" class="dropdown-item" href="Sign.html">Sign out</a></li>
					  </ul>
					</div>
					</div>
				  </div>
			</nav>
		</div>
	</header>
	<body>	
		<main class="row m-0 p-0">
			<!--<section class="container">
				<ul class="nav">
					<li class="nav-item">
					  <a class="nav-link active" aria-current="page" href="#" id="home">Home</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#" id="colonCancer">Colon-Cancer-Image-Upload</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#" id="lungCancer">Lung-Cancer-Image-Upload</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#" id="">Lung-Cancer-Image-Upload</a>
					</li>    
				</ul>
			</section>	-->
			<div id="chatbot" class="col-sm-6 full-h p-5 d-none">
				<div class="h-100 w-100 bg-light rounded-top scroll pb-2" id="Question">
			
				</div>
				<div class="d-flex align-items-end flex-column bd-highlight mb-3">
				  <div class="mt-auto w-100 p-0">
				  	<div class="btn-group w-100 bg-light" role="group" aria-label="Basic mixed styles example">
					   <button type="button" class="btn rounded-2 py-3 border border-5" id ="click1" onclick="response()">Yes</button>
					   <button type="button" class="btn rounded-2 py-3 border border-5" id ="click2" onclick="response()">No</button>
					</div>
				  </div>
				</div>
			</div>
			<div id="uploadImageC" class="col-sm-6 full-h p-5 ">
			<form action="lung-cancer-image-upload.php" method="POST" enctype="multipart/form-data">
				<h1>lungCancer</h1>	
				<label for="formFileMultiple" class="form-data my-2"><b>Please upload the tests</b></label><br>
			    <input required type="file" name="img" accept=".jpg,.jpeg,.png" class="form-control w-50 ">
            	<input type="submit" name="submit-img" value="Upload image" class="form-control bg w-50 my-2">
			</form>
			 
			</div>
			<div class="col-sm-6 p-5">
				<div class="m-0 p-5 robot">
					<img src="img/robot1.gif" class="h-100 w-100 img-fluid">
					<!-- <audio controls autoplay  id="playAudio">
					  <source src="voice.ogg" type="audio/ogg">
					  <source src="voice.mp3" type="audio/mpeg">
						Your browser does not support the audio element.</audio> -->
				</div>
			</div>
		</main>
	 
		<script src="js/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="js/Syndrome.js"></script>
		<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>
	</body>
</html>
 