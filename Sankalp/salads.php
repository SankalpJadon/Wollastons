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
hr.line{
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
.name{
    font-size: 30px;
}
</style>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>Salads</strong>
                    </h2>
                    <hr>
                </div>

      <!-- Chicken Caesar Salad -->
                <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <a class="name" href="#">Caesar Chicken salad</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0 0 15px;">
                  Try our NEW handcrafted Chicken Caesar salad.
                  </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6" style="margin:0 0 0 50px;">
                        <a href="#"><img class="img-responsive img-circle" src="img/salads/chickencaesar.jpg" alt="" width="304" height="236"></a>
                    </div>
                    <div class="col-md-3">This is the best salad<br/>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#chickencaesarmodal">More Details</button>
                    </div>

                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                 </div>

      <!-- Garden egg salad -->
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <a class="name" href="#">Garden Egg Salad</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0 0 15px;">
                  Our garden egg salad made freshly every morning.
                  </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6" style="margin:0 0 0 50px;">
                        <a href="#"><img src="img/salads/gardenegg.jpg" class="img-responsive img-circle" alt="" width="304" height="236"></a>
                    </div>
                    <div class="col-md-3">This is the best sandwich of the south<br/>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#gardeneggmodal">More Details</button>
                    </div>
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                 </div>

      <!-- Cranberry Chicken Salad -->
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <a class="name" href="#">Cranberry Chicken Salad</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0 0 15px;">
                  This salad contains cranberry, chicken and mayo.
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6" style="margin:0 0 0 50px;">
                        <a href="#"><img src="img/salads/cranberrychicken.jpg" class="img-circle" alt="" width="304" height="236"></a>
                    </div>
                    <div class="col-md-3">Best selling salad at Wollaston's<br/>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cranberrychickenmodal">More Details</button>
                    </div>

                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                 </div>

      <!-- Egg Salad -->
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <a class="name" href="#">Egg Salad</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0 0 15px;">
                  This salad contains egg, vegetables and mayo.
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6" style="margin:0 0 0 50px;">
                        <a href="#"><img src="img/salads/eggsalad.jpg" class="img-circle" alt="" width="304" height="236"></a>
                    </div>
                    <div class="col-md-3">One of the best selling salads at Wollaston's<br/>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cranberrychickenmodal">More Details</button>
                    </div>

                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                 </div>


      <!-- White chicken salad-->
                <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <a class="name" href="#">White Chicken Salad</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0 0 15px;">
                  This salad contains White meat chicken, vegetables and mayo.
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6" style="margin:0 0 0 50px;">
                        <a href="#"><img src="img/salads/whitechicken.jpg" class="img-circle" alt="" width="304" height="236"></a>
                    </div>
                    <div class="col-md-3">High protien salad<br/>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cranberrychickenmodal">More Details</button>
                    </div>
                   <div class="col-lg-12" style="margin: 10px 0;">
                       <div class="col-md-4"><hr></div>
                       <div class="col-md-4"><hr></div>
                       <div class="col-md-4"><hr></div>
                   </div>
                  </div>

      <!-- Tuna Salad -->
               <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <a class="name" href="#">Tuna Salad</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0 0 15px;">
                  This salad is also very high in protien.
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6" style="margin:0 0 0 50px;">
                        <a href="#"><img src="img/salads/tunasalad.jpg" class="img-circle" alt="" width="304" height="236"></a>
                    </div>
                    <div class="col-md-3">High protien salad<br/>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cranberrychickenmodal">More Details</button>
                    </div>
                   <div class="col-lg-12" style="margin: 10px 0;">
                       <div class="col-md-4"><hr></div>
                       <div class="col-md-4"><hr></div>
                       <div class="col-md-4"><hr></div>
                   </div>
                  </div>

      <!-- Potato Salad -->
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <a class="name" href="#">Potato Salad</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0 0 15px;">
                  This salad is also very high in carbohydrate. Good pre-workout choice.
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6" style="margin:0 0 0 50px;">
                        <a href="#"><img src="img/salads/potatosalad.jpg" class="img-circle" alt="" width="304" height="236"></a>
                    </div>
                    <div class="col-md-3">High Carb Salad<br/>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cranberrychickenmodal">More Details</button>
                    </div>
                   <div class="col-lg-12" style="margin: 10px 0;">
                       <div class="col-md-4"><hr></div>
                       <div class="col-md-4"><hr></div>
                       <div class="col-md-4"><hr></div>
                   </div>
                  </div>

                 <div>
                    <br/>
                 </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
<?php include('footer.php'); ?>