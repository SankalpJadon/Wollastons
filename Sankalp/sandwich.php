<?php include('navigation.php'); ?>
<?php include('./excel_reader/reader.php');
    $excel=new Spreadsheet_Excel_reader();
?>

<style>
    h3{
        font-family: 'PT Serif', serif;
    }
</style>

<script>
        function showResult(str) {
          if (str.length==0) { 
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
            return;
          }
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
              document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
              document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            }
          }
          xmlhttp.open("GET","livesearch.php?q="+str,true);
          xmlhttp.send();
          return false;
        }

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
                            <div style-align="text-align:center; padding:150px 0">
                                <object>
                                    <center><embed src="img/wollastonlogo.svg"></center>
                                </object>
                            </div>
                            <hr>
                            <h1 class="intro-text text-center">All 
                                <strong>Sandwiches</strong>
                            </h1>
                            <hr>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                             <p>"The humble sandwich! From the classic Ruben to the industrious Wentworth, sandwiches serve as anything from a simple lunch option to a decadent treat. At Wollaston, we offer a range of sandwiches to suit your ever needs. Quick meal or tasty treat, we offer all the options you could ever desire. All our sandwiches use the freshest ingredients and are handmade as per your preferences."</p>
                            </div>
                            <div class="col-md-3">
                            </div> 
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <hr/>
                                </div>
                                  <div class="col-lg-4">
                                    <hr/>
                                </div>
                                  <div class="col-lg-4">
                                    <hr/>
                                </div>
                            </div> 
                        </div>
                            <?php 
                            $excel->read('./excel_reader/sandwiches.xls');
                            $x=2;

                            echo('<div class="col-lg-12">');
                                while($x<=$excel->sheets[0]['numRows']){
                                            $y=2;
                                            while($y<=$excel->sheets[0]['numCols']){
                                                if($y==2){
                                                    echo('<div class="col-md-6" style="display:inline-block;  height:230px; overflow:auto;">');
                                                    $cell=isset($excel->sheets[0]['cells'][$x][$y])? $excel->sheets[0]['cells'][$x][$y]:''; 
                                                    echo('<div class="col-lg-12">');
                                                    echo('<h3>');                                                    
                                                    echo($cell);
                                                    echo('</h3>');                                                  
                                                    echo('</div>');
                                                    echo('<div class="col-lg-12">');
                                                    echo ("<img src='./img/sub.jpg'/ style='padding:10px 0 0 0;'>");
                                                    echo('</div>');
                                                }
                                                if($y==3){
                                                     $cell=isset($excel->sheets[0]['cells'][$x][$y])? $excel->sheets[0]['cells'][$x][$y]:''; 
                                                    echo('<div class="col-lg-12" style="padding:20px 0 0 15px; font-weight:bold;">');
                                                    echo($cell);
                                                    echo('</div>');
                                                }
                                                $y++;
                                    }
                                    echo('</div>');
                                    $x++;
                                }
                                echo('</div>');
                            ?>
                        </div>
            </div>
        </div>

      <!-- /.container -->
                    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left" style="position:absolute; z-index:99999;">Return on top <span class="glyphicon glyphicon-chevron-up"></span></a>
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
            <script>
                $(document).ready(function(){
                    $('#back-to-top').click(function () {
                            $('#back-to-top').tooltip('hide');
                        $('body,html').animate({
                            scrollTop: 0
                        }, 1200);
                        return false;
                    });
                    $('#back-to-top').tooltip('show');
                });
            </script>

    </body>

</html>
