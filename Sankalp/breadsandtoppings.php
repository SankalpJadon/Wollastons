<?php include('navigation.php'); ?>

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

<style>
.enlarge:hover {
    position:relative;
    top:-25px;
    left:-35px;
    width:500px;
    height:auto;
    display:block;
    z-index:999;
}
</style>

   <div id="image" class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">1. Our
                        <strong>Breads and Toppings</strong>
                    </h2>
                    <hr>
                </div>

                <div class="col-lg-12">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        
                    </div>
                    <div class="col-lg-3"></div>
                </div>
                
                <div class="col-lg-12">
                    <div class="col-md-6">
                         <h3> Our Breads</h3>
                         <p>Baked fresh daily, our bread is a good source of calcium and Vitamin D. Available in 6-inch and footlong sizes.</p><br/>
                         <p>Choose from: </p>
                         <ol>
                            <li>French bread sub</li>
                            <li>Whole wheat sub</li>
                            <li>Panini bread</li>
                            <li>Gluten free bread</li>
                            <li>Flat bread</li>
                         </ol>
                    </div>
                    <div class="col-md-6" style="padding:140px 0 0 0;">
                        <div class="col-md-3">
                            <img class="img-responsive img-circle" src="img/misc/frenchsub.jpg" alt="" height="500" width="500">
                            French sub roll
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive img-circle" src="img/misc/wholewheat.jpg" alt="" height="500" width="500">
                            Whole wheat sub roll
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive img-circle" src="img/misc/paninibread.jpg" alt="" height="500" width="500">
                            Panini bread
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive img-circle" src="img/misc/glutenfree.jpg" alt="" height="500" width="500">
                            Gluten free bread
                        </div>
                    </div>
                </div>

                <div class="col-lg-12" style="padding: 30px 0 0 0;">
                    <div class="col-md-6">
                        <h3> Our Fresh Cheese</h3>
                        <p> Stuff your sandwiches and bagels with our variety of fresh cheese<br/></p>
                        <p> You can choose from: </p>
                            <ol>
                                <li>White American</li>
                                <li>Yellow American</li>
                                <li>Parmesan</li>
                                <li>Pepperjack</li>
                                <li>Swiss</li>
                                <li>Chedder</li>
                                <li>Smoked Chedder</li>
                                <li>Mozzarella</li>
                                <li>Provolone</li>
                            </ol>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <img class="img-responsive img-rounded enlarge" src="img/misc/cheese.jpg" alt="" height="500" width="500" style="padding: 130px 0 0 0;">
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive img-rounded enlarge" src="img/misc/cheese2.jpg" alt="" height="500" width="500" style="padding: 130px 0 0 0;">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12" style="padding: 30px 0 0 0;">
                    <div class="col-md-6">
                        <h3> Our meat options</h3>
                        <p>Top up your sandwiches with our wide variety of freshly sliced meat that we offer<br/></p>
                        <p> You can choose from: </p>
                            <ol>
                                <li>Roast Beef</li>
                                <li>Mortedella</li>
                                <li>Salami</li>
                                <li>Bacon</li>
                                <li>Hot Ham</li>
                                <li>Honey Ham</li>
                                <li>Ham</li>
                                <li>Turkey</li>
                                <li>Cajun Turkey</li>
                                <li>Italian Turkey</li>
                                <li>Honey Turkey</li>
                                <li>Smoked Turkey</li>
                                <li>Chicken Breast</li>
                                <li>BBQ Chicken</li>
                                <li>Buffalo Chicken</li>
                            </ol>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <img class="img-responsive img-rounded" src="img/misc/meat2.jpg" alt="" height="500" width="500" style="padding: 130px 0 0 0;">
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive img-rounded" src="img/misc/meat1.jpg" alt="" height="500" width="500" style="padding: 130px 0 0 0;">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive img-rounded" src="img/misc/meat3.jpg" alt="" height="500" width="500" >
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left" style="position:absolute; z-index:99999;">Return on top <span class="glyphicon glyphicon-chevron-up"></span></a>
    </div>
   
   <?php include('footer.php'); ?>