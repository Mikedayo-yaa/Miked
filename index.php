<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
    
</head>
<body>

    <?php $page = 'home'; include 'includes/navbar.php'; ?>
	

	<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel" id="index">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/GreenwhiteBG1.jfif"></div>
			<div class="carousel-item"><img src="img/GreenwhiteBG3.jfif"></div>
			<div class="carousel-item"><img src="img/GreenwhiteBG2.jfif"></div>
            <div class="box1">
            <p class="p1">Prevend.</p>
                </div>
            <div class="box2">
            <p class="p1">Prevent an end!</p>
                </div>
		</div>
      
    
	</div>
    
	<!--- End Image Slider -->

	<!--- BOOTSTRAP UDEMY COURSE -->
	<div id="pricing" class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Met dit nieuwe design kunnen wij de kosten verlagen.</h2>
				<p class="lead">We gebruiken alleen sterke natuurvriendlijke producten.</p>
                <a class="btn btn-purple btn-lg" href="https://nl.wikipedia.org/wiki/Aardbei" target="_blank">CLICK</a>
                <p class="lead">Kom langs en pak en koop een bakje aardbeien voor $3.50</p>
             <img class="logo1" src="img/Logo2.png">
            <img class="logo2" src="img/Logo3.jfif">
			</div>
           
            
		</div>
	</div>
	<!--- BOOTSTRAP UDEMY COURSE -->

	<!--- Start Jumbotron -->
	<div class="jumbotron"id="product">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">ALLEEN MAAR DE BESTE KWALITEIT!</h2>
			
				<div class="col-10 col-md-4">
					<div class="feature">
						<img class="imgEi" src="img/    .jpg">
                        <div class="imagetext1">
						<h3>The world first straberry dispensery.</h3>
						
                            </div>
					
				</div>
				
				<div class="col-10 col-md-4 pr-20">
					<div class="feature">
						<img class="imgEI1" src="img/01-1.jpg">
					
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->
       
	<!--- Two Column Section -->
	<div id="contact" class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3  class="pb-4">Nog vragen neem gauw conact op</h3>
				<p>De eerste voledig automatische aardbeien dispensery nu in Nederland.</p>
				<p>Daar zijn vast veel vragen over. heb je een vraag stel hem dan op de link hier beneden.</p><a class="btn btn-purple btn-lg" href="https://nl.wikipedia.org/wiki/Aardbei">De aarbei</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/stawberry2.jfif"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

	  <?php include 'includes/footer.php'; ?>

     <?php include 'includes/scripts.php'; ?>



</body>
</html>







