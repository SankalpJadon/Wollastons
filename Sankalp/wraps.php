<?php include('navigation.php'); ?>
<style>
    .hover1 a img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
}
    .hover1 a:hover img {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
}

hr.line{
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
.name{
    font-size: 30px;
}
</style>
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
                    <h2 class="intro-text text-center">Our
                        <strong>Wraps</strong>
                    </h2>
                    <hr>
                </div>
                 
                <div class="col-lg-12">
                    <p style="text-align:center">"Try one of our specialty wraps for a tasty, lighter meal full of fresh vegetables and protein!"</p>
                </div>

                <div class="col-lg-12">
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                 </div>

      <!-- Chicken Caesar Wrap -->
                <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <a class="name" href="#" style="text-decoration:none; color:black;">Chicken Caesar Wrap</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6 hover1">
                        <a href="#"><img class="img-responsive img-circle" src="img/wraps/chickencaesar.png" alt="" width="304" height="236"></a>
                    </div>
                    <div class="col-md-6"><p>This classic handheld with grilled chicken, Parmesan cheese and chopped Caesar croutons features the perfect amount of dressing for a tasty meal any night.  What's more? It comes in different wrap flavours- wheat, regular, spinach, tomato</p>
                    <br/>
                    </div>

                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                 </div>

      <!-- mediterranean wrap -->
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <a class="name" href="#" style="text-decoration:none; color:black;">Mediterranean Wrap</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12">
                    <div class="col-md-6"><p class="googlefont1">Have a delicious wrap loaded with the flavors of the Mediterranean for an easy dinner or lunch with friends. This wrap is loaded with veggies like onion, zucchini, eggplant, mushroom, bell peppers and pesto. It's got hummus as dressing and feta cheese to add that extra flavor.</p><br/>
                    </div>
                    <div class="col-md-6 hover1">
                        <a href="#"><img src="img/wraps/medwrap.png" class="img-responsive img-circle" alt="" width="304" height="236"></a>
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