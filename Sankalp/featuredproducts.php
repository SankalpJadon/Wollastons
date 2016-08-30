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

.googlefont1{
    font-family: 'Dancing Script', cursive;
    font-size:2em;
}

</style>
    <div class="container">

        <div class="row">
            <div class="box">

                 <!-- Featured Items -->
                 <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center" >Featured
                        <strong>Items</strong>
                    </h2>
                    <hr>
                </div>
                 <div class="col-lg-12">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-6">
                        <p>"Every day we prepare something special to pamper you and make you feel home. Our endeavor is to serve you just what you need on any particular day of the week. That's why we have something new each day, after all we don't want to bore you with the same menu each day! So drop by if our special of the day matches with what you need."</p>
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
                    <div class="col-md-6">
                        <a class="name" href="#" style="text-decoration:none; color:black;">Our daily hot food</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <img class="img-responsive img-rounded" src="img/hot food/hotfood.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                    <p>We fill our hot case daily with potato wedges, chicken wings, chicken tenders, BBQ chicken, tornadoes everyday to keep you snackin' and munchin' </p><br/>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#hotfoodmodal">More Details</button>
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
                        <a class="name" href="#" style="text-decoration:none; color:black;">Wednesdays and Thursday</a>
                    </div>                     
                 </div>                
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                    <b><p>Homemade Chili</p></b><br>
                    <p>A recipe, found as far back as 1850, consisted of dried beef, suet, pepper, salt and chilli      peppers. We found an even tastier balance by adding a few extra herbs and spices to it. Initially called chili con carne, this recipe is very popular in South and West. Did you know that Chili is the official dish of Texas? </p><br/>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#chilimodal">More Details</button>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive img-rounded" src="img/hot food/chili.jpg" alt="">
                    </div>
                 </div>

                 <div class="col-lg-12" style="margin: 10px 0;">
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                     <div class="col-md-4"><hr></div>
                 </div>

                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <a class="name" href="#" style="text-decoration:none; color:black;">Mondays and Thursdays</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6">
                        <img class="img-responsive img-rounded" src="img/hot food/jamaicanchicken.jpg" alt="">
                    </div>
                    <div class="col-md-6"><b><p>Jamaican jerk chicken and beef patties</p></b><br/>
                    <p>This humble caribbean dish is one of our best sellers and we make it exacty the way it's supposed to be- spicy and hot. We make sure to use only the freshest of the meats available.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#jamaicanandbeefmodal">More Details</button>
                    </div>
                 </div>

                <div class="col-lg-12">
                    <div class="col-md-4"><hr></div>
                    <div class="col-md-4"><hr></div>
                    <div class="col-md-4"><hr></div>
                </div>

                 <div class="col-lg-12" style="margin: 10px 0;">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <a class="name" href="#" style="text-decoration:none; color:black;">Thursdays and Fridays</a>
                    </div>                     
                 </div>
                 <div class="col-lg-12" style="margin: 10px 0 0 15px;">
                    <div class="col-md-6"></div>
                    <div class="col-md-6"></div>
                 </div>
                 <div class="col-lg-12">
                    <div class="col-md-6">
                        <b><p>Hot Turkey Dinner</p></b><br>
                        <p>Want a little bit of halloween year round? Try our fresh hot turkey dinner every thursday and fridays. We use slow roasted turkey breast served with our house made dressing, mashed potatoes and gravy, with cranberry sauce on the side. </p><br/>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#hotturkeydinnermodal">More Details</button>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive img-rounded" src="img/hot food/turkeydinner.jpg" alt="">
                    </div>
                 </div>
                 
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- Southern smokehoue modal -->
    <div id="hotfoodmodal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Hot food</h3>
          </div>
            <div class="col-lg-12">
                <div class="col-md-6">
                    <h4>All items sold are priced per pound</h4><br>
                        <ol>
                            <li>Chicken Tenders</li>
                            <li>Tornadoes</li>
                            <li>Fried Chicken</li>
                            <li>BBQ Chicken</li>
                            <li>Chicken Wings</li>
                        </ol>
                </div>
                <div class="col-md-6">
                    <img src="img/hot food/hotfood.jpg"/ width="400" height="200">
                </div>
            </div>
            <div class="col-lg-12">
                
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- Homemade chili -->
    <div id="chilimodal" class="modal fade" role="dialog" style="position:fixed; z-index:99999;">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Homemade Chili</h4>
          </div>
             <div class="col-lg-12">
                <div class="col-md-6">
                    <h4>Description</h4><br>
                </div>
                <div class="col-md-6">
                    <img src="img/hot food/chili.jpg"/ width="400" height="200">
                </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- jamaican chicken and beef patties modal -->
    <div id="jamaicanandbeefmodal" class="modal fade" role="dialog" style="position:fixed; z-index:99999;">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Jamaican chicken and beef patties</h4>
             </div>
             <div class="col-lg-12">
                <div class="col-md-6">
                    <h4>Description</h4><br>
                    <p>Jerk is a style of cooking native to Jamaica in which meat is dry-rubbed or wet marinated with a very hot spice mixture called Jamaican jerk spice. We make this recipe exactly the way it's made in Jamaica.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/hot food/jamaicanchicken.jpg"/ width="400" height="200">
                </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- Turkey dinner -->
    <div id="hotturkeydinnermodal" class="modal fade" role="dialog" style="position:fixed; z-index:99999;">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Fresh hot turkey dinner</h4>
          </div>
             <div class="col-lg-12">
                <div class="col-md-6">
                    <h4>Description</h4><br>
                    Thought that the Hot Turkey Dinner is served only on Thanksgiving Day? Guess you were wrong. We have this fresh recipe for you. Our slow cooked turkey breasts come with mashed potatoes, stuffing, cranberry sauce, gravy.
                </div>
                <div class="col-md-6">
                    <img src="img/hot food/turkeydinner.jpg"/ width="400" height="200">
                </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

<?php include('footer.php'); ?>