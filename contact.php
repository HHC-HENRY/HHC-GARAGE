<?php
	require('Templates/header.html');
?>

<!DOCTYPE html>
<html lang="en">

<body>
<section id="contact" class=" text-center" style="margin-top: 100px">
<div class="container">
	<div class="row">
		<div class="col-lg-8 mx-auto">
			 <h2>CONTACT HHC GARAGE</h2>
						<h6>Phone: +60 188886666</h6>
						<h6>E-mail: hhcgarage@gmail.com</h6>
						<h6>Address: 39, Jalan SOUTHBAY 3, Batu Maung, Penang, 11960</h6>

						<div class="container">
							<a href="#map" class="btn btn-circle js-scroll-trigger">
							<i class="fa fa-angle-double-down animated"></i>
							</a>
						</div>
						
						<p>
						<br />
						<br />
						<br />
						<br />
						<br />
						</p>
		</div>
	</div>
</div>
</section>
</body>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HHC GARAGE</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">

  </head>
  
  <!-- Map -->
  <section id="map"?
    <head>
    <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>
  </head>
  <body>
    <h3>We're welcome for your visit!</h3>
    <div id="map"></div>
	
	<script>
      function initMap() {
        var uluru = {lat: 5.2841596, lng: 100.283307};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHB0ulDACy0WkmjFZvXuFq2cowRbpAYjw&callback=initMap">
    </script>
  </body>
  </section>
	
<?php
	require('Templates/footer.html');
?>