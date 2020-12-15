<?php 
	include "dataSource.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	
		
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  	<script src="https://kit.fontawesome.com/fc66c741f3.js" crossorigin="anonymous"></script>
 	<script type="main.js"></script>

 	<link rel="stylesheet" href="../css/style.css">

  	<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=swap" rel="stylesheet">

	<title>	Covid-19 Tracker </title>
</head>

 <body style="background: url(../images/covidBanner1.jpg) no-repeat center center fixed;">


 	<div class="row w-100 h-100 ">
			<div class="col-lg-5 col-md-5 col-12">
				<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center rotate">
					<img src="../images/virusEarth1.png">
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-12">
				<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center " >
					<h1> COVID-19 LIVE </h1>
				</div>
			</div>
			
	</div>


	<div class="container">
		<table class="table table-striped table-hover" id="tracktable">
			<thead class="thead-dark">
				<th scope="col">Countries</th>
				<th scope="col" colspan="2" class="text-center">Confirmed</th>
				<th scope="col" colspan="2" class="text-center">Recovered</th>
				<th scope="col" colspan="2" class="text-center">Deceased</th>
			</thead>

			<tbody>
				<?php 
					foreach ($data as $key => $value) {
						$confirmed_increase = $value[$total_days]['confirmed'] - $value[$days_prev]['confirmed'];
						$recovered_increase = $value[$total_days]['recovered'] - $value[$days_prev]['recovered'];
						$deaths_increase = $value[$total_days]['deaths'] - $value[$days_prev]['deaths'];
				?>

				<tr>
					<th><?php echo $key;  ?></th>
					<td>
						<?php echo $value[$total_days]['confirmed'];  ?>
					</td>
					<td>
						<?php if( $confirmed_increase != 0) { ?>
							<small class="text-danger"><i class="fas fa-long-arrow-alt-up"> <?php echo $confirmed_increase; ?></i></small>
						<?php } ?>
						
					</td>
					<td>
						<?php echo $value[$total_days]['recovered'];  ?>
					</td>
					<td>
						<?php if( $recovered_increase != 0) { ?>
							<small class="text-success"><i class="fas fa-long-arrow-alt-up"> <?php echo $recovered_increase; ?></i></small>
						<?php } ?>
						
					</td>
					<td>
						<?php echo $value[$total_days]['deaths'];  ?>
					</td>
					<td>
						<?php if( $deaths_increase != 0) { ?>
							<small class="text-secondary"><i class="fas fa-long-arrow-alt-up"> <?php echo $deaths_increase; ?></i></small>
						<?php } ?>
						
					</td>
				</tr>

				<?php  }  ?>
			</tbody>


		</table>
		

	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#tracktable').Data
		})
	</script>

 
 </body>
 </html>