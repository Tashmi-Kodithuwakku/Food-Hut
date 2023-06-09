<?php

session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food Hut - Blog</title>

 
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <link href="css/business-casual.css" rel="stylesheet">


    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="brand">Food Hut</div>

    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
				
				
                    <hr>
                    <h2 class="intro-text text-center">Food Hut
                        <strong>blog</strong>

                    </h2>
                    <hr>
                </div>

<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> </h2>


    
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>chicken wings, fried fish, crispy pork belly
                        <br>
                        
                    </h2>
                    
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Fruit Juice 
                        <br>
                       
                    </h2>
                    
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Fruits & Vegetables 
                        <br>
                        
                    </h2>
                    
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
<h2> <a href="logout.php">Logout</a></h2>
    </div>
   

	
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Frying</h4>
		  </div>
		  <div class="modal-body">
			<p>Frying is a cooking method that involves immersing food in hot oil, which creates a crispy outer layer while keeping the inside moist and tender. Different types of meats can be fried, and the seasonings and spices used can vary depending on the cuisine and the recipe.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	

	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">


		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Fruit Juices</h4>
		  </div>
		  <div class="modal-body">
			<p>Fruit juice is a popular beverage that is made by extracting the juice from various fruits. It is enjoyed by people all over the world, and is available in many different flavors and varieties.

Fruit juice can be made from a variety of fruits, such as oranges, apples, berries, grapes, pineapples, and many others. Some juices are made from a single type of fruit, while others are made by combining the juices of multiple fruits to create a unique flavor profile.

Fruit juice is often touted as a healthy beverage option, as it is a good source of vitamins and minerals, especially vitamin C. However, it's important to note that many store-bought fruit juices can be high in sugar and calories, which can contribute to health issues such as obesity and tooth decay.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	

	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Fruit & Vegetables </h4>
		  </div>
		  <div class="modal-body">
			<p>Fruits and vegetables are essential components of a healthy diet, providing a wide range of nutrients and health benefits. Here's some information about each:

Fruits:
Fruits are sweet, juicy, and packed with nutrients like vitamins, minerals, and antioxidants. They come in many varieties, including berries, citrus fruits, melons, and tropical fruits. Some common fruits include apples, oranges, bananas, strawberries, blueberries, grapes, and pineapples.

Eating a variety of fruits can help boost your immune system, improve digestion, and reduce the risk of chronic diseases such as heart disease and diabetes. Fruits are also a good source of fiber, which can help you feel full and satisfied.

Vegetables:
Vegetables are the edible parts of plants, and come in a variety of colors, textures, and flavors. They are an excellent source of nutrients like vitamins, minerals, fiber, and phytonutrients. Some common vegetables include broccoli, spinach, carrots, tomatoes, peppers, and sweet potatoes..</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>

  
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>
