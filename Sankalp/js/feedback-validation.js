function feedbackValidation()
{
var ucomment = document.feedback.desc;
var uname = document.feedback.username;
var uemail = document.feedback.email;
var uage = document.feedback.age;
 
if (required())
{
if(checkcomment(ucomment))
{
if(lettername(uname))
{
if(numericage(uage))
{
if(ValidateEmail(uemail))
{
alert('Thank You For Your Feedback!!');
window.location.reload();
}
}
}
}
}
return false;
 
}

//Validation for empty fields
 function required()
{
var empty1 = document.forms["feedback"]["month"].value;
var empty2 = document.forms["feedback"]["day"].value;
var empty3 = document.forms["feedback"]["year"].value;
var empty4 = document.forms["feedback"]["desc"].value;
var empty5 = document.forms["feedback"]["username"].value;
var empty6 = document.forms["feedback"]["age"].value;
var empty7 = document.forms["feedback"]["email"].value;

if (empty1 == "" || empty2 == "" || empty3 == "" || empty4 == "" || empty5 == "" 
|| empty6 == "" || empty7 == "" )
{
alert("Please input all values!");
return false;
}
else 
{
return true; 
}
}

//Validate comment section
function checkcomment(ucomment)
{ 
var letters = /^[A-Za-z ]+$/;
if(ucomment.value.match(letters))
{
return true;
}
else
{
alert('Comments field must have alphabet characters only.');
ucomment.focus();
return false;
}
}

//Name Text Validation
function lettername(uname)
{ 
var letters = /^[A-Za-z ]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Name must have alphabet characters only.');
uname.focus();
return false;
}
}


//Email Validation
function ValidateEmail(uemail)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
}

//Age Dropdown Validation

function numericage(uage)
{
if(uage.value == "Default")
{
alert('Select your age from the list');
uage.focus();
return false;
}
else
{
return true;
}
}

