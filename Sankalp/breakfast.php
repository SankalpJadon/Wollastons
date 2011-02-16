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

   <div id="image" class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">1. Select
                        <strong>Bagels</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12">
                  <div class="col-lg-3">
                  </div>
                  <div class="col-lg-6">
                    <p>"Our breakfast section contains variety of bagels to choose from. Weather it's a classic BLT sandwich or a regular egg n'cheese, you can find your combination here. Just choose a bagel, select meat, put in whichever cheese you want, and throw in our fresh veggies to make it your way!"</p>
                  </div>
                  <div class="col-lg-3">
                  </div>
                </div>

                <div class="col-lg-12">
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                 </div>

                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-3">
                        <img class="img-responsive img-border-left" src="img/bagels/everything.jpg" alt="" height="500" width="500">
                        Bagels
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive img-border-left" src="img/bagels/wheat.jpg" alt="" height="500" width="500">
                        Wheat Bagel
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive img-border-left" src="img/bagels/cinnamon.jpg" alt="" height="500" width="500">
                        Cinnamon Bagel
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive img-border-left" src="img/bagels/plain.jpg" alt="" height="500" width="500">
                        Plain Bagel
                    </div>
                   
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                   <center><a href="#meat"><img src="img/bagels/downarrow.png" height="100" width="100"></a></center>
                 </div>
                 <div id="meat" class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">2. Select
                        <strong>Meat</strong>
                    </h2>
                    <hr>
                 </div>
                 <div class="col-lg-12">
                     <div class="col-md-6">
                        <p> Stuff your bagels with our variety of fresh meat that we offer-<br/>
                            <ol>
                                <li>Egg Sausage</li>
                                <li>Chicken Sausage</li>
                                <li>Meat Sausage</li>
                                <li>Turkey</li>
                                <li>Smoked Turkey</li>
                                <li>Honey Turkey</li>
                                <li>Pepper Turkey</li>
                                <li>Cajun Turkey</li>
                                <li>Roast Beef</li>
                                <li>Ham</li>
                                <li>Honey Ham</li>
                                <li>Hot Ham</li>
                                <li>Salami</li>
                                <li>Bacon</li>
                                <li>Mortedella</li> 
                                <li>BBQ chicken</li>
                                <li>Buffalo chicken</li>
                                <li>Chicken breast</li>
                            </ol>
                        </p>
                    </div>
                    <div class="col-lg-6">
                      <img class="img-rounded" src="img/meat.jpg" style="padding:50px 0 0 0;">
                    </div>
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                   <center><a href="#veggies"><img src="img/bagels/downarrow.png" height="100" width="100"></a></center>
                 </div>
                 <div id="veggies" class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">3. Select
                        <strong>Veggies</strong>
                    </h2>
                    <hr>
                 </div>
                 <div class="col-lg-12">
                     <div class="col-md-6">
                        <p> Select from our variety of fresh vegetables-<br/>
                            <ol>
                                <li>Tomato</li>
                                <li>Lettuce</li>
                                <li>Onion</li>
                                <li>Cucumber</li>
                                <li>Pickles</li>
                                <li>Banana Peppers</li>
                                <li>Peppers</li>
                                <li>Roasted veggies</li>
                            </ol>
                        </p>
                    </div>
                    <div class="col-md-6">
                      <img class="img-rounded" src="img/veggies.jpg" style="padding:25px 0 0 0;"/>
                    </div>
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                   <center><a href="#cheese"><img src="img/bagels/downarrow.png" height="100" width="100"></a></center>
                 </div>
                 <div id="cheese" class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">4. Select
                        <strong>Cheese</strong>
                    </h2>
                    <hr>
                 </div>
                  <div class="col-lg-12">
                     <div class="col-md-6">
                        <p>List of all Cheese offerings at wollaston's-<br/>
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
                      <img class="img-rounded" src="img/misc/montreyjack.jpg" height="250px" length="300px" style="padding:30px 0 0 0;"/>
                    </div>
                 </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
<?php include('footer.php'); ?>