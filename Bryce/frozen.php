<?php include('navigation.php'); ?>

    <div class="container">

        <div class="row">
			<div class="box" align="center"> 				           
				<h1 class="intro-text text-center"><strong><h1>Search a Product: </h1></strong>
				<input id="search" type="text" name="search" placeholder="Click here..">				
			</div>
		</div>           
			
			<div class="box">
             <div id="food">
				
				<div class="row">				
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/corndogs.jpg" alt="">
						<h5>corn dogs</h5>
					</div>				
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/frenchbreadpizza.jpg" alt="">
						<h5>french bread pizza</h5>
					</div>
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/fritatas.jpg" alt="">
						<h5>fritatas</h5>
					</div>
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/frozenpak.jpg" alt="">
						<h5>Frozen Ice Pack</h5>
					</div>
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/gardenburger.jpg" alt="">
						<h5>garden burger</h5>
					</div>				
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/juice.jpg" alt="">
						<h5>smoothies</h5>
					</div>
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/lasagna.jpg" alt="">
						<h5>lasagna</h5>
					</div>
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/pasta.jpg" alt="">
						<h5>pasta</h5>
					</div>
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/potatoes.jpg" alt="">
						<h5>potatoes</h5>
					</div>				
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/waffles.jpg" alt="">
						<h5>waffles</h5>
					</div>
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/yogurt.jpg" alt="">
						<h5>yogurt</h5>
					</div>
					<div align="center" class="col-lg-4">
						<span class="tooltip"></span>						
						<img class="img-responsive" src="img/food/frozen/stirfry.jpg" alt="">
						<h5>stirfry</h5>					
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

<!-- Search -->	
	<script>
		
	var $elem = $(".col-lg-4");	
	$("#search").keyup(function() {
    var val = $.trim(this.value);
    if (val === ""){
        $elem.show();		
		}
    else {        
		$elem.hide();		
		$elem.has("h5:contains(" + val + ")").show();		
	}
});
	
	</script>
	
	
</body>

</html>
