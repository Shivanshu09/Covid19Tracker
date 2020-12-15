<?php 
	
	include "connection.php";
	include "dataSource.php";
	include "register.php";
?>

<!DOCTYPE html>
<html>
<head>
	
		
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 	

  	
  	<link rel="stylesheet" href="../css/style.css">

  	

  	<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
		

	<title>	Covid-19</title>
</head>
 
<body>
	<div>
 
		<div class="row w-100 h-100 ">
			<div class="col-lg-5 col-md-5 col-12">
				<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
					<img src="../images/Virus1.png" class="rotate">
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-12">
				<div class="container-fluid p-5 text-center my-3 " >
					<h1> COVID-19 </h1>
					<h3 class="text-muted ">-A PANDEMIC</h3>
					<p class="text-muted">A Virus with which we all have to fight together</p>
				</div>
			</div>
			
		</div>

		<div>
			
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark col-12">
  				<a class="navbar-brand" href="index.php"></a>
  					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="navbar-toggler-icon"></span>
 					</button>

  				<div class="collapse navbar-collapse" id="navbarSupportedContent">
    				<ul class="navbar-nav mr-auto">
					    <li class="nav-item">
					        <a class="nav-link" href="#live-count">Live Tracking</a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link" href="#symptoms">Symptoms</a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link" href="#precautions">Precautions</a>
					    </li>
            
    				</ul>
				    <div class="my-2 my-lg-0">
				    	<a href="#sick" class="btn btn-primary"><span>Are you Sick?</span></a>
				    </div>
  				</div>
			</nav>
		</div>

		<div class="container" id="live-count" style="padding-top: 10px;">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-7 col-md-7 col-12">
					<div class="content-part">
						<div class="banner-content">
	                        <h4>Tatal Confirmed Corona Cases Worldwide</h4>
	                        <h2 class="count-people"><?php echo $total_confirmed; ?></h2>
	                        <div class="borderless">
	                            <ul class="list-group">
	                                <li><span class="text-warning" style="font-size: 30px;">Active Cases:</span> <span class="text-warning"style="font-size: 30px;"><span class="count"></span><?php echo ($total_confirmed - $total_recovered); ?></span></span></li>
	                                <li><span class="text-success" style="font-size: 30px;">Recovered cases:</span><span class="text-success" style="font-size: 30px;"><?php echo $total_recovered; ?></span></li>
	                                <li><span class="text-danger" style="font-size: 30px;">Deaths:</span> <span class="text-danger" style="font-size: 30px;"><?php echo $total_deaths; ?></span></li>
	                            </ul>
	                        </div>
	                        <div style="padding-top: 20px;">
	                            <a href="tracking.php" class="btn btn-primary" role="button" style="border-radius: 50%"><span>Detailed Data</span></a>
	                        </div>
	                    </div>
					</div>
	            </div>
				<div class="col-lg-5 col-md-5 col-12">
	                <section class="stage">
					    <figure class="ball"></figure>
					</section>
	            </div>
	        </div>
		</div>
		
		<div class="container">
			<div class="row" style="padding-top: 20px;">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="leftside">
						<img src="../images/Bat.jpg" width = "400" height="300" style="border-radius: 50%">
					</div>
					
				</div>
				<div class="col-lg-7 col-md-7 col-12">
                    <div>
                        <h3>The Bat Myth</h3>
                        <p>The COVID -19 infection, which has wreaked havoc across the world, is commonly believed to have originated in China’s Wuhan city in late 2019. Many are of the opinion that the virus originated from an animal at the Huanan seafood market in Wuhan.Some theories say it is highly likely that the COVID-19 virus came from bats and first passed through an intermediary animal before infecting humans</p>
                    </div>
                </div>				
			</div>

			<div class="row" style="padding-top: 20px;">
				<div class="col-lg-7 col-md-7 col-12">
                    <div>
                        <h3>The VIRUS Origin</h3>
                        <p>Although the real oigin of the Virus is still unknown but media believes that the virus leaked from a testing lab inn the Wuhan University, China. Although no sources have claimed this information to be true. All the great scientists are still in a race to find the real origin of the virus but no scientist is successful yet. The WHO is also trying to figure out the origin of the virus</p>
                    </div>
                </div>		
				<div class="col-lg-5 col-md-5 col-12">
					<div class="leftside rotate">
						<img src="../images/HeadVirus.png" width = "300" height="300">
					</div>
					
				</div>
			</div>
		</div>

		

		<div class="container text-center" style="padding-top: 50px;">
			<h3 class="text-muted" id="symptoms">---SYMPTOMS---</h3>
			<div class="row">
				<div class="col-6" id="box" style="left: -10px;    right: 10px;    bottom: 10px; box-shadow: 5px 5px;">
					<div class="row">
						<div class="col-3">
							<img src="../images/fever.png" width="100" height="100" style="border-radius: 50%">
						</div>
						<div class="col-9">
							<h4 class="text-center">FEVER</h4>
							<p>This is by far the most common sign of COVID-19, and is defined by having a temperature of 100.4° F or higher</p>
						</div>
						
					</div>
				</div>
				<div class="col-6" id="box" style="left: 10px;    bottom: 10px; box-shadow: 5px 5px;">
					<div class="row">
						<div class="col-3">
							<img src="../images/cough.png" width="100" height="100" style="border-radius: 50%">
						</div>
						<div class="col-9">
							<h4 class="text-center">DRY COUGH</h4>
							<p>Covid leads to a bad coughing spree and one of its unusual symptoms is the presence of a dry cough, which happens when the virus attacks the respiratory tract</p>
						</div>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="row" id="box" style="left: -10px;    bottom: 10px;    right: 10px; bottom: 10px; box-shadow: 5px 5px;">
						<div class="col-3">
							<img src="../images/fatigue.png" width="100" height="100" style="border-radius: 50%">
						</div>
						<div class="col-9">
							<h4 class="text-center">FATIGUE</h4>
							<p>Feeling fatigue and muscle pain are a persistent symptom of the virus affecting 14.8% patients across US</p>
						</div>
					</div> 
				</div>
				<div class="col-6" >
					<div class="row" id="box" style="    left: 10; bottom: 10px; box-shadow: 5px 5px;">
						<div class="col-3">
							<img src="../images/lossSmell.png" width="100" height="100" style="border-radius: 50%">
						</div>
						<div class="col-9">
							<h4 class="text-center">LOSS of SMELL</h4>
							<p>Loss of smell or sensation was one of the most prominent atypical symptoms which came to be associated with COVID-19</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6" id="box" style="    top: 30px;    left: -10px; box-shadow: 5px 5px;">
					<div class="row">
						<div class="col-3">
							<img src="../images/cold.png" width="100" height="100" style="border-radius: 50%">
						</div>
						<div class="col-9">
							<h4 class="text-center">COLD</h4>
							<p>Feeling cold without a reason, accompanied by intense shaking is being tagged as a prominent symptom of COVID-19</p>
						</div>
						
					</div>
				</div>
				<div class="col-6" id="box" style="	top: 30px; left: 10px; box-shadow: 5px 5px;">
					<div class="row">
						<div class="col-3">
							<img src="../images/pinkeye.png" width="100" height="100" style="border-radius: 50%">
						</div>
						<div class="col-9">
							<h4 class="text-center">PINK EYES</h4>
							<p>The virus could not just spread through respiratory droplets but nasal and eye fluids too</p>
						</div>
						
					</div>
				</div>
			</div>

		</div>

		<div class="container" style="padding-top: 50px;">
			<h3 class="text-muted text-center" id="precautions">---PRECAUTIONS---</h3> 
			<div>
				<div class="row" id="box"  style="margin: 10px; box-shadow: 5px 5px;">
					<div class="col-3">
						<img src="../images/stayHome.png" width="100" height="100">
					</div>
					<div class="col-6">
						<h4>Stay home and avoid public gatherings</h4>
					</div>
				</div>
			</div>
			<div>
				<div class="row" id="box" style="margin: 10px; box-shadow: 5px 5px;">
				<div class="col-3">
					<img src="../images/distancing.png" width="100" height="100">
				</div>
				<div class="col-6">
					<h4>Follow Social Distancing and Maintain a distance of atleast 1m from others</h4>
				</div>
			</div>
			</div>
			
			<div class="row" id="box" style="margin: 10px; box-shadow: 5px 5px;">
				<div class="col-3">
					<img src="../images/washHands.jpg" width="100" height="100">
				</div>
				<div class="col-6">
					<h4>Take your time and Wash hands properly</h4>
					<button class="button btn-primary"><span><a href="https://www.google.com/search?tbm=shop&sxsrf=ALeKk014PzPICYpoNYnFHNsBq2x9OWEO3w:1592615122248&q=best+hand+washes&spell=1&sa=X&ved=0ahUKEwj2hYDVmY_qAhXY63MBHe5zCsMQBQixAigA&biw=1536&bih=674"></a></span>BUY</button>
				</div>
			</div>
			<div class="row" id="box" style="margin: 10px; box-shadow: 5px 5px;">
				<div class="col-3">
					<img src="../images/sanitise.png" width="100" height="100">
				</div>
				<div class="col-6">
					<h4>Keep sanitising your hands time to time</h4>
					<button class="button btn-primary"><a href="https://www.amazon.in/sanitizer/s?k=sanitizer"></a>BUY</button>
				</div>
			</div>
			<div class="row" id="box" style="margin: 10px; box-shadow: 5px 5px;">
				<div class="col-3">
					<img src="../images/wearMask.jpg" width="100" height="100">
				</div>
				<div class="col-6">
					<h4>Wear Masks whenever you have to go out</h4>
					<button class="button btn-primary"><a href="https://www.google.com/search?biw=1536&bih=674&tbm=shop&sxsrf=ALeKk03AAAlR-2xXDNMzTv271fIZYeRcXg%3A1592615327083&ei=n2HtXqfTBLHEz7sPvcWxmA0&q=best+mask&oq=best+ma&gs_lcp=Cgtwcm9kdWN0cy1jYxADGAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAOgQIIxAnOgQIABAYOgQIABAKUKBGWO9WYP1naABwAHgAgAG7AYgB8weSAQMwLjaYAQCgAQGqAQ9wcm9kdWN0cy1jYy13aXo&sclient=products-cc"></a>BUY</button>
				</div>
			</div>
		</div>

		<div class="container" style="padding-top: 50px;">
			<h3 class="text-muted text-center">---NEED MEDICATION?---</h3>
		</div>
		

		<div class="container" id="sick">
			<form action="index.php" method="POST">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fas fa-hospital-alt"></i>Are You Sick?</h3>
                                    <p class="m-0">Register Your Problems Here</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="registration" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="registration" name="email" placeholder="abc@gmail.com" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-phone-square-alt"></i></div>
                                        </div>
                                        <input class="form-control" id="registration" name="MobileNumber" placeholder="xxxxxxxxxx" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-home"></i></div>
                                        </div>
                                        <textarea class="form-control" name="address" placeholder="Address" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-stethoscope"></i></div>
                                        </div>
                                        <textarea class="form-control" name="symptoms" placeholder="Symptoms" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" name="register-user" value="Register" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
            </form>
		</div>


		<script src="https://unpkg.com/swiper/js/swiper.js"></script>
		<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	  	<script src="https://kit.fontawesome.com/fc66c741f3.js" crossorigin="anonymous"></script>
	</div>

</body>
</html>