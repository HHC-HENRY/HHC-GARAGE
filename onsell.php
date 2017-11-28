<?php
	require('Templates/header.html');
?>

<?php
session_start();
?>

<?php
	require('Templates/header2.php');
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>HHC | ONSELL</title>
		<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

    <!-- Intro Header -->
	<div class="container">
		<div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="text-center">&bullet;ON  SELL&bullet;</h1>
            </div>
		</div>
	</div>
		
	<!-- Sorting -->
	<ul class="nav nav-tabs navbar-left latest-navleft">
		<li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>
		<li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR">MOST RECENT </a></li>
		<li  role="presentation"><a href="#" class="alphSort">ALPHABETICAL </a></li>
		<li data-filter=".HPRICE" role="presentation"><a href="#" class="prcBtnH">HIGHEST PRICE </a></li>
		<li data-filter=".LPRICE" role="presentation"><a href="#" class="prcBtnL">LOWEST  PRICE </a></li>
		<li>
		<?php	
			if($isAdmin == true)
		{
			require_once ('Modal_Includes/Modal_Interface.php');
										
			echo '<a href="#" data-toggle="modal" data-target="#add_data">Add item</a>';
		}
		?>
		</li>
		<li id="hideonmobile"></li>
	</ul>
<br />
<br />


<!-- ________________________Latest Cars Image Thumbnail________________-->
	<div class="grid">
		<div class="row">

			
			<?php
			
			$conn = new mysqli('localhost','root','','login');
			$query = 'select * from onsell;';
			
			$res = $conn->query($query);
			
			if($res->num_rows > 0)
			{
				while($row = $res->fetch_assoc())
				{
					echo '
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<div class="txthover">
								<img src="Modal_Includes/onsell_newimg/'.$row['onsell_pic'].'" alt="car1">
									<div class="txtcontent">
										<div class="stars">
											<div class="glyphicon glyphicon-star"></div>
											<div class="glyphicon glyphicon-star"></div>
											<div class="glyphicon glyphicon-star"></div>
										</div>
										<div class="simpletxt">
											<h3 class="name">'.$row['onsell_name'].'</h3>
											<p>"'.$row['onsell_description'].'" </p>
											<h4 class="price"> '.$row['onsell_price'].'&euro;</h4>
										</div>
										<div class="stars2">
											<div class="glyphicon glyphicon-star"></div>
											<div class="glyphicon glyphicon-star"></div>
											<div class="glyphicon glyphicon-star"></div>
										</div>
									</div>
							</div>	 
						</div>
					'
					;
				}
			}
			
			$res->close();
			$conn->close();
			
			?>
			
		</div>
	</div>
	
	
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>
