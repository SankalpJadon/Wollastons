<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">


    <style>

        nav ul ul li {
            display: block; 
            width: 20em; 
            background-color: #ccc;
        }

        nav ul li{
            display:inline-block;
        }

        nav ul li a: hover{
            text-decoration: none;
            background-color: #3e8e41;

        }

        nav ul li a,visited{
            color:black;
            display:block;
            padding: 5px;
            text-decoration: none;
        }
           
        nav ul li:hover { 
                background-color: #C0C0C0;
        }

        nav ul li:hover ul{ 
            display: block; 
            color: black;
        }

        nav ul ul{
            display:none;
            position: absolute;
            display: none;
            z-index: 99999;
            margin-left:-40px;
            width:400px;

        }

        .deliproducts li a:hover{
            color:black;
            text-decoration: none;
        }

        nav ul li a{
            color:black;
        }


        .livesearch{
            background: #000000;
            display: none;
            overflow: auto;
            width: 330px;
            z-index: 99999;
            position: relative; 

        }

    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wollaston's</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Sankalp/css/wollastondeli.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
     <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Home Page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul id="list" class="nav navbar-nav">
                    <li>
                        <a href="../index.html">Home</a>
                    </li>
					<li>
                        <a href="about.php">About</a>
                    </li>
					<li>
                        <a href="../Saurabh/bakery.html">Bakery</a>
                    </li>
                    <li>
                        <a href="deli.php">Deli</a>
                        <ul class="deliproducts">
                            <li><a href="featuredproducts.php">Featured Products</a></li>
                            <li><a href="sandwich.php">All Sandwiches</a></li>
                            <li><a href="fitsandwiches.php">Fitness Sandwiches</a></li>
                            <li><a href="Wraps.php">Wraps</a></li>
                            <li><a href="breakfast.php">Breakfast</a></li>
                            <li><a href="breadsandtoppings.php">Breads and Toppings</a></li>
							<li><a href="gallery.php">Gallery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../Bryce/grocery.html">Groceries</a>
                    </li>
                    <li>
                        <a href="../Bryce/contact.php">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container"> 
		<div class="row">
			<div id="image" style="position:relative; z-index:-1; top:50px; height:250px">
				<div class="brand animated bounceInRight">Wollaston's Deli</div>
    			<div class="address-bar animated bounceInLeft">"YOUR NEIGHBOURHOOD GROCER"</div>
			</div>
		</div>
	</div>