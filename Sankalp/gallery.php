<?php include('navigation.php'); ?>

<!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/cycle2.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

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

    <style type="text/css">
     * {
        margin: 0;
        padding: 0;
    }
    #container {
        width: 100%;
        height: 704px;
        position: relative;
        overflow: hidden;
        background: #F5F5F5;
    }
    #slideshow {
        height: 100%;
        width: 100%;
    }
    #slideshow img {
        height: 100%;
        width: 100%;
    }
    #pager {
    	text-align: center;
        height: 120px;
        width: 100%;
        position: absolute;
        bottom: 5%;
        background: rgba(0,0,0,.5);
        z-index: 1000;
        opacity: 0;
        transition: all 0.3s ease-in-out 0s;
    }
    #pager:hover {
       opacity: 1;
    }    
    
    #prev {
        height: 120px;
        width: 120px;
        position: absolute;
        top: 0;
        bottom: 0;
        left:0;
        margin: auto 10px;
        z-index: 1000;
    }
     #next {
        height: 120px;
        width: 120px;
        position: absolute;
        top: 0;
        bottom: 0;
        right:0;
        margin: auto 10px;
        z-index: 1000;
    }
    </style>

    <div class="container"> 
        <div class="row">
            <div class="box">
                <center><p> Welcome to our image gallery! We've had some good times in the past.</p></center>
            </div>
        </div>
    </div>

    <div class="container"> 
        <div class="row">
            <div class="box">
                <div id="image" class="col-lg-12">
                    <div id="slideshow" 
                    class="cycle-slideshow"
                    data-cycle-speed = "600"
                    data-cycle-timeout = "3000"
                    data-cycle-pager = "#pager"
                    data-cycle-pager-template ="<a herf='#'><img src='{{src}}' height=100 width=150/>"
                    data-cycle-next = "#next"
                    data-cycle-prev = "#prev"
                    data-cycle-manual-fx = "scrollHorz"
                    data-cycle-manual-speed = "400"
                    data-cycle-pager-fx = "fade">
                    <img src="img/gallery/img3.jpg" alt="">
                        <img src="img/gallery/img1.jpg" alt="">
                        <img src="img/gallery/img4.jpg" alt="">
                        <img src="img/gallery/img5.jpg" alt="">
                        <img src="img/gallery/img6.jpg" alt="">
                        <img src="img/gallery/img7.jpg" alt="">
                        <img src="img/gallery/img8.jpg" alt="">
                    </div>
                    
                    <div id="pager"></div>
                    <img id="prev" src="img/prev1.svg"/>
                    <img id="next" src="img/next1.svg"/>
                </div>
            </div>
        </div>
    </div>
 
    <!-- /.container -->

   <?php include('footer.php'); ?>