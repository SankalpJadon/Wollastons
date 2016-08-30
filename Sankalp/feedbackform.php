<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>Customer Feedback Form</title>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<style type='text/css'>

 body{
 	 color: black;
 	 text-align:center;
 	 font-family: Georgia, serif;
     background-color: white;
     background-repeat: no-repeat;
     background-size:1300px 1100px;
     text-align:center;
      }      
      
input[type="text"], input[type="checkbox"], input[type="number"], textarea, select{
font-family: Georgia, serif;
color:black;
background-color: #FFFFCC;
}    

::-webkit-input-placeholder {
   font-family: Georgia, serif;
   color: black;
}
      
h1 {
font-family: Georgia, serif;
text-align:center;
}

form li {
font-family: Georgia, serif;
color:black;
font-size:14px;
list-style: none;
margin-bottom: 10px;
}

form ul li label{
font-family: Georgia, serif;
color:black;
font-size:14px;
float: left;
clear: right;
width: 650px;
text-align: right;
margin-right: 10px;
}

form ul li input, select {
font-family: Georgia, serif;
color:black;
font-size:14px;
float: left;
margin-bottom: 10px;
}

span {
font-family: Georgia, serif;
font-size:14px;
float: left;
margin-bottom: 10px;
}

form textarea {
font-family: Georgia, serif;
color:black;
font-size:14px;
float: left;
width: 350px;
height: 150px;
}

[type="submit"] {
font-family: Georgia, serif;
color:black;
background-color: #FFFFCC;
clear: right;
text-align:center;
margin: 20px 20px 30px 750px;
font-size:15px
}

#one {
font-family: Georgia, serif;
text-align:center;
/* margin-left: 600px; */
font-weight: bold;
}

</style>
</head>
<body>
<h1>Feedback Form</h1>
<p id="one"> Help us get better with your valuable feedback!</p> 
<p> <a href = "template.html" style="color:black" text-align="center"> Go to Homepage </a></p>
<form ng-app="myApp" ng-controller="validateCtrl" name="myForm" >
<ul>

<li><label for="date">Date Visited :</label></li>  
<li><input type="number" name="month" size="3" ng-model="month" maxlength="2" placeholder="mm" min="1" max="12" required/></li>
 <span style="color:black" ng-show="(submitted || myForm.month.$touched) && myForm.month.$invalid">
<span ng-show="(submitted && myForm.month.$error.required) || myForm.month.$error.required">Required</span>
</span>

<li><input type="number" name="day" size="3" ng-model="day" maxlength="2" placeholder="dd" min="1" max="31" required/></li>
 <span style="color:black" ng-show="(submitted || myForm.day.$touched) && myForm.day.$invalid">
<span ng-show="(submitted && myForm.day.$error.required) || myForm.day.$error.required">Required</span>
</span>

<li><input type="number" name="year" size="5" ng-model="year" maxlength="4" placeholder="yyyy" min="1930" max="2020" required/></li>
 <span style="color:black" ng-show="(submitted || myForm.year.$touched) && myForm.year.$invalid">
<span ng-show="(submitted && myForm.year.$error.required) || myForm.year.$error.required">Required</span>
</span>
<br/>

<li><label id="inout">Sandwich / Rolls </label></li>
<li><input type="radio" name="dine" value="DineIn" checked /><span>Sandwich &nbsp&nbsp </span></li>
<li><input type="radio" name="dine" value="DineOut" /><span>Roll</span></li>
<br/>

<li><label id="food">Food/Beverage Quality:</label></li>
<li><input type="radio" name="quality" value="excellent" checked /><span>Excellent &nbsp&nbsp</span></li>
<li><input type="radio" name="quality" value="good" /><span>Good &nbsp&nbsp</span></li>
<li><input type="radio" name="quality" value="average" /><span>Average &nbsp&nbsp</span></li>
<li><input type="radio" name="quality" value="dissatisfied" /><span>Dissatisfied </span></li>
<br/>

<li><label id="clean">Cleanliness:</label></li>
<li><input type="radio" name="cleanliness" value="excellent" checked /><span>Excellent &nbsp&nbsp </span></li>
<li><input type="radio" name="cleanliness" value="good" /><span>Good &nbsp&nbsp </span></li>
<li><input type="radio" name="cleanliness" value="average" /><span>Average &nbsp&nbsp </span></li>
<li><input type="radio" name="cleanliness" value="dissatisfied" /><span>Dissatisfied  </span></li>
<br/>

<li><label id="order">Order Accuracy:</label></li>
<li><input type="radio" name="accuracy" value="excellent" checked /><span>Excellent &nbsp&nbsp </span></li>
<li><input type="radio" name="accuracy" value="good" /><span>Good &nbsp&nbsp </span></li>
<li><input type="radio" name="accuracy" value="average" /><span>Average &nbsp&nbsp </span></li>
<li><input type="radio" name="accuracy" value="dissatisfied" /><span>Dissatisfied </span></li>
<br/>

<li><label id="speed">Speed of Service:</label></li>
<li><input type="radio" name="service" value="excellent" checked /><span>Excellent &nbsp&nbsp </span></li>
<li><input type="radio" name="service" value="good" /><span>Good &nbsp&nbsp </span></li>
<li><input type="radio" name="service" value="average" /><span>Average &nbsp&nbsp </span></li>
<li><input type="radio" name="service" value="dissatisfied" /><span>Dissatisfied </span></li>
<br/>

<li><label id="value">Value for money:</label></li>
<li><input type="radio" name="value" value="excellent" checked /><span>Excellent &nbsp&nbsp </span></li>
<li><input type="radio" name="value" value="good" /><span>Good &nbsp&nbsp </span></li>
<li><input type="radio" name="value" value="average" /><span>Average &nbsp&nbsp </span></li>
<li><input type="radio" name="value" value="dissatisfied" /><span>Dissatisfied </span></li>
<br/>

<li><label id="overall">Overall Experience:</label></li>
<li><input type="radio" name="overall" value="excellent" checked /><span>Excellent &nbsp&nbsp </span></li>
<li><input type="radio" name="overall" value="good" /><span>Good &nbsp&nbsp </span></li>
<li><input type="radio" name="overall" value="average" /><span>Average &nbsp&nbsp </span></li>
<li><input type="radio" name="overall" value="dissatisfied" /><span>Dissatisfied</span></li>
<br/>

<li><label for="desc">Any comments, questions or  </br> suggestions? Please explain <br> below:</label></li>
<li><textarea name="desc" id="desc" ng-model="desc" ng-pattern="/^[A-Za-z ]+$/" required></textarea><br/></li>
 <span style="color:black" ng-show="(submitted || myForm.desc.$touched) && myForm.desc.$invalid">
  <span ng-show="(submitted && myForm.desc.$error.required) || myForm.desc.$error.required">About is required.</span>
  <span ng-show="myForm.desc.$error.pattern"> About name can only have letters.</span>
  </span>

<li><label for="username">Name:</label></li>
<li><input type="text" name="username" size="30" ng-model="username" ng-pattern="/^[A-Za-z ]+$/" required/></li>
 <span style="color:black" ng-show="(submitted || myForm.username.$touched) && myForm.username.$invalid">
  <span ng-show="(submitted && myForm.username.$error.required) || myForm.username.$error.required">Username is required.</span>
  <span ng-show="myForm.username.$error.pattern"> Username can only have letters.</span>
  </span> 
<br/>

<li><label for="age">Age:</label></li>
<li><select name="age">
<option selected="" value="a">Under 13</option>
<option value="b">13-17</option>
<option value="c">17-24</option> 
<option value="d">25-34</option>
<option value="e">35-45</option>
<option value="f">46 or older</option>
</select></li>
<br/>

<li><label for="email">Email:</label></li>
<li><input type="text" name="email" size="30" ng-model="email" ng-pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/" required//></li>
<span style="color:black" ng-show="(submitted || myForm.email.$touched) && myForm.email.$invalid">
<span ng-show="(submitted && myForm.email.$error.required) || myForm.email.$error.required">Email is required.</span>
<span ng-show="myForm.email.$error.pattern"> Invalid Email.</span>
 </span>
<br/>

<li><label> Please add me to <br> Frequent Cafe Group:</label></li>  
<li><input type="radio" name="add" value="yes" checked /><span>Yes &nbsp&nbsp </span></li>  
<li><input type="radio" name="add" value="no" /><span>No</span></li>  
<br/>

<li><input type="submit" name="submit" value="Submit" ng-click="submitted=true" /></li>

<br/>
</ul>
<br/>
</form>

<script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {

    $scope.username = '';
    $scope.email = '';
    $scope.desc='';
 
});

</script>


</body>
</html>
