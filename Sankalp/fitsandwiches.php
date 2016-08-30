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

@keyframes blink {
    0% {
        opacity: 1;
    }
    30% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.image{
  animation: blink 3s;
  animation-iteration-count: infinite;
}


</style>
    <div id="image" class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our Fitness
                        <strong>Sandwiches</strong>
                    </h2>
                    <hr>
                </div>

                <div class="col-lg-12">
                  <div class="col-lg-3"></div>
                  <div class="col-lg-6">
                    <p style="text-align:center">"Being located in Marino center gym, we have a responsibility to cater to our fitness freaks! And we just have what you want. We have two speciality sandwiches to cut down on those calories while still feeling full."</p>
                  </div>
                  <div class="col-lg-3"></div>
                </div>

                <div class="col-lg-12">
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                 </div>

                <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <a class="name image" href="#" style="text-decoration:none; color:black;">Marino Fitness</a>
                    </div>                     
                </div>
                <div class="col-lg-12" >
                    <div class="col-md-6">
                        <a><img class="img-responsive image img-rounded" src="img/sandwich/marinofitness.jpg" height="400" width="400" alt=""></a>
                    </div>
                    <div class="col-md-6"><p class="googlefont1">Get your workout on. A wheat-roll with guacamole, olive oil, Monterrey jack cheese, sun dried tomatoes, sprouts and lettuce<br/>
                    <button id="#test" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#marinofitnessmodal">More Details</button>
                    </div>
                 </div>

                 <div class="col-lg-12" style="margin: 10px 0;">
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                 </div>

                <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <a class="name image" href="#" style="text-decoration:none; color:black;">The Healthy Choice</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                    <p class="googlefont1">Watching what you eat? Our healthy choice has you covered. Wheat roll- pesto, fresh mozzarella, tomatoes</p><br/>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#chilimodal">More Details</button>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive image img-rounded" src="img/sandwich/healthychoice.jpg" height="400" width="400" alt=""></a>
                    </div>
                 </div>
                    
                 </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- Marino Fitness modal -->
    <div id="marinofitnessmodal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Marino Fitness</h3>
          </div>
            <div class="col-lg-12">
                <div class="col-md-6">
                    <h4>Ingredients</h4><br>
                    Guacamole, olive oil, monterry jack cheese,sun dried tomatoes, sprouts and lettuce.
                </div>
                <div class="col-md-6">
                    <img src="img/sandwich/marinofitness.jpg"/ width="400" height="200">
                </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- healthychoicemodal -->
    <div id="healthychoicemodal" class="modal fade" role="dialog" style="position:fixed; z-index:99999;">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">The healthy choice</h4>
          </div>
             <div class="col-lg-12">
                <div class="col-md-6">
                    <h4>Ingredients</h4><br>
                    On a wheat bread- Pesto, fresh mozerrela, tomato.
                </div>
                <div class="col-md-6">
                    <img src="img/sandwich/healthychoice.jpg"/ width="400" height="200">
                </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    
<?php include('footer.php'); ?>