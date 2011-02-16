<?php
    include('navigation.php');
?>
<script type="text/javascript">
    var ypos,slowElement;
    function parallex(){
        ypos=window.pageYOffset;
        if(ypos>50){
              slowElement= document.getElementById('image');
        slowElement.style.top = ypos*.8+'px';
        }
      
    }
    window.addEventListener('scroll',parallex);
</script>
    <!-- /.container -->
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Wollaston's 1980</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</div>
</body>

</html>
