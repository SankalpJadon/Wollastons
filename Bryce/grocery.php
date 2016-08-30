<?php include('navigation.php'); ?>

    <div class="container">

        <div class="row">
		<div class="box">
             <div id="offers">
				<h1 class="intro-text text-center"><strong><h1>Deals & Offers</h1></strong></h1>				
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>							
						</ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-full" src="img/deal1.jpg" style="width:400px;height:600px" alt="">
                            </div>
                            <div class="item">
                                <img class="img-full" src="img/deal2.jpg" style="width:400px;height:600px" alt="">
                            </div>
                            <div class="item">
                                <img class="img-full" src="img/deal3.jpg" style="width:400px;height:600px" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                       <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>               -->     
				</div>
			  </div> 
            </div>
			</div>           
			
			<div class="box">
             <div id="food">
				<h1 class="intro-text text-center"><strong><h1>Food</h1></strong></h1>
				<div class="row">
					<div align="center" class="col-sm-4">
						<span class="tooltip"></span>
						<a href="frozen.php">
						<img class="img-responsive" src="img/food/food1.jpg" alt="">
						<h5>Click for More...</h5>
						</a>
						<h5>Frozen</h5>
					</div>				
					<div align="center" class="col-sm-4">						
						<a href="frozen.php">
						<img class="img-responsive" src="img/food/food2.jpg" alt="">	
						<h5>Click for More...</h5>
						</a>
						<h5>Dairy</h5>
					</div>					
					<div align="center" class="col-sm-4">					
						<a href="frozen.php">
						<img class="img-responsive" src="img/food/food3.jpg" alt="">
						<h5>Click for More...</h5>
						</a>
						<h5>Cereal</h5>
					</div>
				</div>
			  </div> 
            </div>
						
			<div class="box">
             <div id="bevs">
			  <h1 class="intro-text text-center"><strong><h1>Beverages</h1></strong></h1>
			   <div class="row">
					<div align="center" class="col-sm-4">						
						<a href="frozen.php">
						<img class="img-responsive" src="img/beverages/bev5.jpg" alt="">
						<h5>Click for More...</h5>
						</a>
						<h5>TEA</h5>
					</div>				
					<div align="center" class="col-sm-4">						
						<a href="frozen.php">
						<img class="img-responsive" src="img/beverages/bev1.jpg" alt="">	
						<h5>Click for More...</h5>
						</a>
						<h5>Energy Drinks</h5>
					</div>					
					<div align="center" class="col-sm-4">					
						<a href="frozen.php">
						<img class="img-responsive" src="img/beverages/bev2.jpg" alt="">
						<h5>Click for More...</h5>
						</a>
						<h5>Juices</h5>
					</div>
					<div align="center" class="col-sm-4">						
						<a href="frozen.php">
						<img class="img-responsive" src="img/beverages/bev3.jpg" alt="">
						<h5>Click for More...</h5>
						</a>
						<h5>Soda</h5>
					</div>
					<div align="center" class="col-sm-4">						
						<a href="frozen.php">
						<img class="img-responsive" src="img/beverages/bev6.jpg" alt="">
						<h5>Click for More...</h5>
						</a>
						<h5>Coffee</h5>
					</div>
					<div align="center" class="col-sm-4">						
						<a href="frozen.php">
						<img class="img-responsive" src="img/beverages/bev4.jpg" alt="">
						<h5>Click for More...</h5>
						</a>
						<h5>Water</h5>
					</div>										
				</div>
			  </div> 
            </div>				
    </div>
    <!-- /.container -->    

	<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
					<p> <a href="tandc.php"> Terms & Conditions </a> &copy; 2016 Wollaston's </p>
                </div>
            </div>
        </div>
    </footer>
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	<!-- Smooth Scrolling -->
	<script>
	$(function() {
	$('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
	
	
	</script>
	
</body>

</html>
