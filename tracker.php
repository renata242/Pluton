<?php 

session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>M & R</title>
  <style>
    .item {
    display: none;
    position: relative;
    .transition(.60s ease-in-out left);
  }
      .form-group input[type="text"]{
        width: calc(50% - 25px);
        height:45px;
        border: 1px solid #ddd;
        padding: 0 10px;
        border-radius: 2px;
        font-size:15px;
      
      }
      .form-group button{
        width:20%;
        background-color: #c9ade9;
        border: none;
        font-size: 15px;
        padding: 14px 0;
        border-radius: 5px;
        text-transform: uppercase;
        color:white;
      }

  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script language="JavaScript">
<!--
function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){   
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That you are too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That you are healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That you have overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}
//-->
</script>
</head>
<body style="background-color: #F5EAFB;">
<nav class="navbar navbar-default " style="background-color: #CCB6EE; padding:10px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: black">ICON</a>
      </div>
      <ul class="nav navbar-nav">
        <li class=""><a href="home.php">Home</a></li>
        <li class="active"><a href="tracker.php">Tracker</a></li>
        <li class=""><a href="purchase.php">Booking</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
        Tips list <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="diet.php">Diet</a></li>
            <li><a href="sport.php">Sport</a></li>
          </ul>
        </li> 
        <li class=""><a href="comment.php">Feedback</a></li>   
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"> <span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Log out</a></li>
    </ul>
    </div>
</nav>
 <form name="bmiForm">
<div class="container">
 
<div class="jumbotron text-center" style="margin:0px;">
    <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12 " style="background-color: white; padding:10px; ">
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Your Weight(kg):</label>
                    <div class="col-sm-7">
                        <input type="text" name="weight" size="25"></br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Your Height(cm):</label>
                    <div class="col-sm-7">
                        <input type="text" name="height" size="25"></br>
                    </div>
                </div>

                  <div class="form-group">
                    <div class="col-sm-9" >
                  <button type="button" value="Calculate BMI" onClick="calculateBmi()" >Calculate</button>
                </div>
                  </div>
              </div>

          <div class="col-lg-4 col-md-12 col-sm-12">
           <div class="form-group" style="background-color: white;padding:5px;">
                    <div class="form-group">
                    <label for="firstName" >Your BMI is:</label>
                        <div >
                            <input type="text" name="bmi" size="25"></br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstName" >This means:</label>
                        <div >
                            <input type="text" name="meaning" size="30" style="border-color:white; border:0px; width: 63%"></br>
                        </div>
                    </div>
                    <div class="form-group">
                
                      <input type="reset" value="Reset" />
                     
                    </div>
            </div>
          </div>
    </div>
      
      </div>

</div>
</form>
<footer>
  <div class="jumbotron" style="background-color: #DDD3EC;">
        <div class="container" >
          <div class="col-lg-5 col-md-12 col-sm-12">
        <a href="https://www.instagram.com/rereriin/">
        <img src="instagram.png" width="45" 
        height="45" alt="hi" title="next page"></a>
      <a href="https://www.instagram.com/rereriin/">
        <img src="youtube.png" width="49" 
        height="49" alt="hi" title="next page"></a></div>
        <p>&copy; 2021 | Astana IT University | SE-2005</p>

        <div class="col-lg-4 col-md-12 col-sm-12">
        <p>Contacts: +708-258-65-78</p>
      </div>
      </div>
  </div>
</footer>
</body>
</html>
