<?php include('mainnavigation.php'); ?>
	
	<style>
	
	input.ng-valid{
	border:1px solid #0f0;
	}
	
	textarea.ng-valid{
	border:1px solid #0f0;
	}
	
	input.ng-dirty.ng-invalid{
	border:1px solid #f00;
	}
	
	textarea.ng-dirty.ng-invalid{
	border:1px solid #f00;
	}
	
	</style>

    <div class="container"> 
        <div class="row">
            <div id="image" style="position:relative; z-index:-1; top:50px; height:250px">
                <div class="brand animated bounceInRight">Wollaston's</div>
                <div class="address-bar animated bounceInLeft">"YOUR NEIGHBOURHOOD GROCER"</div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				<button id="pagecount" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Click to see Page hits</button>				
                    <hr>
                    <h2 class="intro-text text-center"> 
                        <strong>Contact</strong> Us
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <!--<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed" allowfullscreen></iframe>-->
					<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJY99fwBh644kR4ehvFgWFKM8&key=AIzaSyAOIk3rFXi2P1bb0D4Tbyi0QR2KbJCy8RI" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>617.247.0011</strong>
                    </p>
                    <p>Email:
                        <strong><a href="wollastonsmarino@yahoo.com">wollastonsmarino@yahoo.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>369 Huntington Ave,
                            <br>Boston, MA 02115</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>FeedBack</strong> Form
                    </h2>
                    <hr>                    
                    <div id="newfeedback" ng-app="myApp">
                    <form name="myForm" role="form" ng-hide="hideform" class="my-form">
                        <div class="row">							
								<div class="form-group col-lg-4">
									<label>Name</label>
									<input id="fname" name="fname" ng-model="fname" type="text" class="form-control" required>
									<p ng-show="myForm.fname.$invalid && !myForm.fname.$pristine" class="help-block">Name is required.</p>
								</div>								
								<div class="form-group col-lg-4">
									<label>Email Address</label>
									<input id="email" name="email" ng-model="email" type="email" class="form-control" required>
									<p ng-show="myForm.email.$invalid && !myForm.email.$pristine" class="help-block">Valid Email is required.</p>
								</div>
								<div class="form-group col-lg-4">
									<label>Phone Number</label>
									<input id="phone" name="phno" ng-model="phno" type="tel" class="form-control" required>
									<p ng-show="myForm.phno.$invalid && !myForm.phno.$pristine" class="help-block">Phone Number is required.</p>
								</div>
								<div class="clearfix"></div>
								<div class="form-group col-lg-12">
									<label>Message</label>
									<textarea id="message" name="message" ng-model="message" ng-trim="false" maxlength="120" class="form-control" rows="6" required></textarea>									
									<div align="right">									
									<span>{{120 - message.length}} characters</span>										
									</div>
									<p ng-show="myForm.message.$invalid && !myForm.message.$pristine" class="help-block">A Message is required.</p>	
								</div>
								<div class="form-group col-lg-12">
									<input type="hidden" name="save" value="contact">
									<button id="insertdata" type="button" class="btn btn-info btn-lg" ng-disabled="myForm.$invalid" data-toggle="modal" data-target="#myModal">Submit</button>
								</div>
							</div>                        
                    </form>
					</div>
                </div>
            </div>
        </div>
		
		<div class="row">
            <div class="box">
                <div id="feedback" class="col-lg-12">
				<?php

				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "wollastons";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
						} else{
						//echo "allgood";
		
						}

							$sql = 'SELECT name FROM feedback';
							$sql2 = 'SELECT message FROM feedback';

							$result = $conn->query($sql);
							$result2 = $conn->query($sql2);

							$conn->close(); 

				?>
				
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>What People Think About Us</strong>
                    </h2>
                    <hr>                                       
                    <form name="myForm" role="form" ng-hide="hideform" class="my-form">
                        <div class="row">	
								<div align="left" class="form-group col-sm-4">
								<label> Name </label>
								<hr>
								<?php							
								// output data of each row
								while($row = $result->fetch_assoc()) {		
									echo "<p>";
									echo $row["name"];
									echo "<br>";						
								}
								?>
								</div>
								<div align="left" class="form-group col-lg-4">
								<label> Feedback </label>
								<hr>
								<?php							
								// output data of each row
								while($row2 = $result2->fetch_assoc()) {		
									echo "<p>";						
									echo $row2["message"];
									echo "</p>";						
								}
								?>
								</div>		
						</div>                        
                    </form>					
                </div>
            </div>
        </div>
		
		<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="glyphicon glyphicon-thumbs-up"></i></h4>
        </div>
        <div class="modal-body">
          <p>This Page has been hit: <?php include "count.php" ?> times</p>
        </div>
        <div class="modal-footer">
          <button id="dalbutton" type="button" class="btn btn-default" data-dismiss="modal">Close</button>		 
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
					<p> <a href="tandc.html"> Terms & Conditions </a> &copy; 2016 Wollaston's </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	
	<script>
		
	$('#insertdata').click(function(){
		
		var name = $("#fname").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var message = $("#message").val();			
		
        $.post("feedbackinsert.php",
        {
          name1: name,
		  email1: email,
		  phone1: phone,
		  message1: message
        },
        function(data, status){
				recodata(data)
        });
		
		$("#fname").val('');
		$("#email").val('');
		$("#phone").val('');
		$("#message").val('');
		
		location.reload();
		
    });
	
	function recodata(data){						
			console.log(data);
	}
		
	var app = angular.module('myApp', []);
	app.directive('myDirective', function() {
		return {
    require: 'ngModel',
    link: function(scope, element, attr, mCtrl) {
      function myValidation(value) {
        if (value.indexOf("e") > -1) {
          mCtrl.$setValidity('charE', true);
        } else {
          mCtrl.$setValidity('charE', false);
        }
        return value;
      }
      mCtrl.$parsers.push(myValidation);
    }
  };
});										
	</script>
	

		
</body>

</html>
