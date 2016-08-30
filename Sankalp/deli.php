<?php include('../Sankalp/navigation.php'); ?>

<script type="text/javascript">
    var ypos,slowElement;
    function parallex(){
        ypos=window.pageYOffset;
        if(ypos>60){
        slowElement= document.getElementById('image');
        slowElement.style.top = ypos*.8+'px';
            if(slowElement.style.top<50){
                slowElement.style.top=200+'px';
            }
        }
      
    }
    window.addEventListener('scroll',parallex);
</script>

<script>
	setTimeout(function() {
	  $("#welcome").fadeOut().empty();
	}, 2000);
</script>


<style>

.hover1 figure img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover1 figure:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}

figure {
	width: 370px;
	height: 250px;
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
figure:hover+span {
	bottom: -36px;
	opacity: 1;
}

h1,
h1+p {
	margin: 30px 15px 0;
	font-weight: 300;
}
h1+p a {
	color: #333;
}
h1+p a:hover {
	text-decoration: none;
}
h2 {
	margin: 60px 15px 0;
	padding: 0;
	font-weight: 300;
}
h2 span {
	margin-left: 1em;
	color: #aaa;
	font-size: 85%;
}
.column {
	padding: 0;
}
.column:last-child {
	padding-bottom: 60px;
}
.column div {
	position: relative;
	float: left;
	width: 370px;
	height: 200px;
	margin: 0 0 0 100px;
	padding: 0 50px 0 0;
}
.column div:first-child {
	margin-left: 0;
}
.column div span {
	position: absolute;
	bottom: -20px;
	left: 0;
	display: block;
	width: 300px;
	margin: 0;
	padding: 0;
	color: black;
	font-size: 18px;
	text-decoration: none;
	text-align: center;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
	opacity: 0;
}
figure {
	width: 300px;
	height: 200px;
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
figure:hover+span {
	bottom: -36px;
	opacity: 1;
}


@-webkit-keyframes circle {
	0% {
		opacity: 1;
	}
	40% {
		opacity: 1;
	}
	100% {
		width: 200%;
		height: 200%;
		opacity: 0;
	}
}
@keyframes circle {
	0% {
		opacity: 1;
	}
	40% {
		opacity: 1;
	}
	100% {
		width: 200%;
		height: 200%;
		opacity: 0;
	}
}

</style>

			<div class="container animate bounceInDown"> 
				<div class="row">
					<div class="box">
						<div id="myCarousel" class="carousel slide">
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img src="img/bg1.jpg"  alt="Entrance" class="img-responsive">
									<div class="carousel-caption">
										<h3>Wollaston entrance</h3>
										<p>This is wollastons entrance</p>
									</div>
								</div>
								<div class="item">
									<img src="img/misc/pepperjack.jpg" class="img-responsive">
									<div class="carousel-caption">
										<h3>Wollaston's Cheese</h3>
										<p>This is wollastons cheese</p>
									</div>
								</div>
								<div class="item">
									<img src="img/sandwich/pike.jpg" class="img-responsive">
									<div class="carousel-caption">
										<h3>Wollaston's sandwiches</h3>
										<p>This is wollastons sandwich</p>
									</div>
								</div>
							</div>
							<a class="carousel-control left" href="#myCarousel" data-slide="prev">
								<span class="icon-prev"></span>
							</a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next">
								<span class="icon-next"></span>
							</a>
						</div>s
					</div>
				</div>
			</div>
		   	<div class="container ">
		        <div class="row">
		            <div class="box">
		                <div class="col-lg-12">
		                    <hr>
		                    <h2 class="intro-text text-center">Deli 
		                        <strong>Products</strong>
		                    </h2>
		                    <hr>
		                </div>
		                 <div class="col-lg-12">
		                    <div class="col-md-4 hover1 column">
		                    	<div>
		                       		<figure><a href="featuredproducts.php"><img class="img-responsive img-rounded" src="img/misc/hotfood.png" alt="" height="300" width="300"></a><p id="featuredproducts">Featured Products</p></figure>
		                       		<span>Featured Products</span>
		                       	</div>
		                    </div>
		                    <div class="col-md-4 hover1 column">
		                    	<div>
		                    		<figure><a href="sandwich.php"><img class="img-responsive img-rounded" src="img/sandwich/c.jpg" alt="" height="300" width="300"></a></figure>
		                       		<span>All Sandwiches</span>
		                    	</div>
		                    </div>
		                     <div class="col-md-4 hover1 column">
		                    	<div>
		                    		<figure><a href="fitsandwiches.php"><img class="img-responsive img-rounded" src="img/misc/healthy.jpg" alt="" height="300" width="300"></a></figure>
		                       		<span>Our Fitness Sandwiches</span>
		                    	</div>
		                    </div>			                    
		                 </div>
		                 <div class="col-lg-12">
		                    <div class="col-md-4 hover1 column">
		                    	<div>
		                       		<figure><a href="wraps.php"><img class="img-responsive img-rounded" src="img/misc/wrapbackground.png" alt="" height="300" width="300"></a></figure>
		                       		<span>Wraps</span>
		                       	</div>
		                    </div>
		                    <div class="col-md-4 hover1 column">
		                    	<div>
		                    		<figure><a href="breakfast.php"><img class="img-responsive img-rounded" src="img/bagels/wheat.jpg" alt="" height="300" width="300"></a></figure>
		                       		<span>Breakfast</span>
		                    	</div>
		                    </div>
		                     <div class="col-md-4 hover1 column">
		                    	<div>
		                    		<figure><a href="salads.php"><img class="img-responsive img-rounded" src="img/salads/gardenegg.jpg" alt="" height="300" width="300"></a></figure>
		                       		<span>Salads</span>
		                    	</div>
		                    </div>			                    
		                 </div>
		                <div class="clearfix"></div>
		            </div>
		        </div>
		    </div>
		    <!-- /.container -->			
		    <footer>
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-12 text-center">
		                    <p>Copyright &copy; Wollaston's 1965</p>
							<a href="feedbackform.html">Feedback form</a>
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
