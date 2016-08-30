<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wollastons";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT MuffinName, ImageName, Likes FROM muffin";
$result = $conn->query($sql);

$value = "";
$value = isset($_POST['action']) ? $_POST['action'] : '';
echo $value;

$conn->close();
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wollaston's Bakery Gallery</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
	<link href="css/muffingallery.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$(".img1").fadeIn(2000);
			$(".img2").fadeIn(3000);

			$(".showcase-gallery1").click(function(){
				$(this).find(".gallery-content").slideToggle("slow");
				
			});
			
			$(".showcase-gallery1").hover(function(){
				$(this).parent().find(".showcase-gallery1").animate({
					opacity: '0.5'
				}, 1);
				$(this).animate({
					opacity: '1.0'
				}, 1);
			});
			
			$(".showcase-gallery1").mouseleave(function(){
				$(this).parent().find(".showcase-gallery1").animate({
					opacity: '1.0'
				}, 1);
			});
		});
		
		$("img").each(function(i,el){
			var img = new Image();
			img.onload = function() {
				$(el).fadeIn("slow");
			}
			img.src = el.src;
		});
		
		function myAjax(a,b,c) {
			$.ajax({
				type: "POST",
				url: 'addlikes.php',
				data:{action:'add_like', muffin: a},
				success:function(html) {
					b.style.opacity = "1";
					b.onclick = '';
					document.getElementById(a).innerHTML = c+1;
				}
			});
		}
	</script>
</head>

<body>

    <div class="brand">Wollaston's Bakery</div>
    <div class="address-bar">"Your neighbourhood grocer" </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
		<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Wollaston's Bakery</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../index.html">Home</a>
                    </li>
                    <li>
                        <a href="../Sankalp/about.php">About Us</a>
                    </li>
                    <li>
						<a class="dropdown-toggle active" data-toggle="dropdown" href="groceries.html">Bakery <span class="glyphicon glyphicon-chevron-down"></a>
						<ul class="dropdown-menu">
							<li><a href="product.html"><h4>Product</h4></a></li>
							<li><a href="Customcake.html"><h4>Customized Cakes</h4></a></li>
							<li><a href="catering.html"><h4>Catering</h4></a></li>
							<li><a href="gallery2.html"><h4>Gallery</h4></a></li>
							<li><a href="peopleschoice.html"><h4>Peoples Choice</h4></a></li>
							<li><a href="#affiliations"><h4>Affiliations</h4></a></li>
						</ul>
					</li>
					<li>
                        <a href="../Sankalp/deli.php">Deli</a>
                    </li>
					<li>
                        <a href="../Bryce/grocery.html">Groceries</a>
                    </li>
                    <li>
                        <a href="../Bryce/contact.php">Contact US</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<div class="container">
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
						<h2 class="intro-text text-center">Our
                        <strong>Muffin Gallery</strong>
						</h2>
                    <hr>
					
					<?php
						if ($result->num_rows > 0) {
							while($row2 = $result->fetch_assoc()) {
								//echo 'Muffin Name: ' . $row2['MuffinName']. ' - Image Name: ' . $row2['ImageName']. ' ' . $row2['Likes']. '<br>';
								
								echo '<div class="muffinimage">';
								echo '<div class="grow pic">';
								echo '<img src="img/' . $row2['ImageName']. '" alt="muffin">';
								echo '</div>';
								echo '<div class="muffin-content">';
								echo '<strong>' . $row2['MuffinName']. '</strong>';
								echo '<span><i class="glyphicon glyphicon-thumbs-up" style="font-size:20px; color: blue; opacity: 0.2;" onclick="myAjax(\'' . $row2['MuffinName']. '\',this, ' . $row2['Likes']. ')"></i> &nbsp <span id="' . $row2['MuffinName']. '">' . $row2['Likes']. '</span></span>';
								echo '</div>';
								echo '</div>';
							}
						}
					?>
                </div>
            </div>
        </div>
	</div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                     <p> <a href="../Bryce/tandc.html"> Terms & Conditions </a> &copy; 2016 Wollaston's </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
