<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food Hut - Home</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/business-casual.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="brand">Food Hut</div>
   
	<?php
		
	if (isset($_GET["logout"])) {
		
		if ($_GET["logout"] == "true") { ?>
			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div>   

	<?php
		}
	}
	?>

    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="slide-3.jpg" alt="">
                            </div>
                        </div>

                       
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small><h1>Welcome to<h1></small>
                    </h2>
                    <h1 class="brand-name"><h2>Food Hut<h2></h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>
                            <strong>Enjoy a Taste of Heaven</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Good food............ Good life...........</strong>
                    </h2>
                    <hr>
                     <img src="intro-pic.jpg" width="1100" height="600">
                    
                    <hr class="visible-xs">
                    <p>Welcome to our restaurant, where every dish is a masterpiece and every experience is unforgettable. From the moment you walk through our doors, you'll be transported to a world of flavor, where every ingredient is carefully selected and expertly prepared to tantalize your taste buds.</p>

<p>Our chefs are true artisans, taking inspiration from global cuisine to create a menu that's as diverse as it is delicious. Whether you're in the mood for a classic comfort food or an exotic new flavor, we have something to satisfy every craving.</p>

<p>But it's not just about the food. Our restaurant is a place to relax, to unwind, and to savor the simple pleasures of life. We believe that every meal should be a celebration, and we strive to create an atmosphere that's warm, welcoming, and always ready to delight.</p>

<p>So come, join us at our table, and let us take you on a culinary journey you'll never forget. From our family to yours, welcome to our restaurant.</p>



                </div>
            </div>
        </div>

    </div>
  

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p></p>
                </div>
            </div>
        </div>
    </footer>

  
    <script src="js/jquery.js"></script>

  
    <script src="js/bootstrap.min.js"></script>

   
    <script>
    $('.carousel').carousel({
        interval: 5000 
    })
    </script>

</body>

</html>
