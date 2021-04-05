
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

  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="selectFilter.min.js"></script>
</head>

<body style="background-color: #F5EAFB;">
<nav class="navbar navbar-default" style="background-color: #CCB6EE; padding:10px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: black">ICON</a>
      </div>
      <ul class="nav navbar-nav">
        <li class=""><a href="home.php">Home</a></li>
        <li class=""><a href="tracker.php">Tracker</a></li>
        <li class="active"><a href="purchase.php">Booking</a></li>
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
<div class="container">
  <div class="middle-heading pb-5 text-center">
        <h2>Pricing</h2>
        <h3>Here are some beautiful examples of gyms</h3>
      </div>
      <div class="row pricing-row">
        <div class="col-md-4 mb-md-0 mb-5 price-grid text-center">
          <img src="https://static.chocolife.me/static/upload/images/deal/for_deal_page/43000/42651/660x305/2_201807120675015313981104745.jpg?1613105098" width="400px" height="200px">
          <div class="price-block agile">
              <div class="price-gd-top pric-clr">
                
                <h3>$5</h3>
                <h5>1 month</h5>
              </div>
              <div class="price-gd-bottom">
                <div class="price-list">
                  <ul>
                    <li>Personal training</li>
                    <li>Diet food</li>
                    <li>players included</li>
                    <li>Coach services</li>
                    
                  </ul>
                </div>
              </div>
                
            </div>
          </div>
          <div class="col-md-4 mb-md-0 mb-5 price-grid text-center">
            <img src="https://i9.photo.2gis.com/images/branch/68/9570149253846521_36bc.jpg" width="400px" height="200px">
            <div class="price-block agile">
              <div class="price-gd-top pric-clr">
                
                <h3>$10</h3>
                <h5>5 months</h5>
              </div>
              <div class="price-gd-bottom">
                <div class="price-list">
                  <ul>
                    <li>Personal training</li>
                    <li>Diet food</li>
                    <li>players included</li>
                    <li>Coach services</li>
                    
                  </ul>
                </div>
              </div>
                
            </div>
          </div>
          <div class="col-md-4 price-grid text-center">
            <img src="https://fitcom.kz/uploads/photos/2016/11/15/582b081266cb3.jpg" width="400px" height="200px">

            <div class="price-block agile">
              <div class="price-gd-top pric-clr">
                
                <h3>$15</h3>
                <h5>Free for 2 months</h5>
              </div>
              <div class="price-gd-bottom">
                <div class="price-list">
                  <ul>
                    <li>Personal training</li>
                    <li>Diet food</li>
                    <li>players included</li>
                    <li>Coach services</li>
                    
                  </ul>
                </div>
              </div>
                
            </div>
             </div>
      </div>
    </div>
<div class="container">
  <div class="col-lg-5 col-md-8 col-sm-8" style="padding-left:100px;">

      <label>City</label>
      <select class="form-control city selectFilter" data-target="time">
        <option value="-1">--Select your city --</option>
        <option data-ref="nur">Nur-Sultan</option>
        <option data-ref="tar">Taraz</option>
        <option data-ref="sem">Semey</option>
        <option data-ref="sem">Shymkent</option>
        <option data-ref="sem">Almaty</option>
        <option data-ref="sem">Aktau</option>
        <option data-ref="tal">Taldykorgan</option>
      </select>
      <label>Daytime </label>
      <select class="form-control time selectFilter" data-target="cost">
        <option value="-1">--Select daytime--</option>
        <option data-ref="lmon" data-belong="nur">Mornigng (from 8am - 12pm)</option>
        <option data-ref="mon" data-belong="nur">Afternoon (from 12pm - 4pm)</option>
        <option data-ref="mmon" data-belong="nur">Eveining (from 4pm - 8pm)</option>
        <option data-ref="mmon" data-belong="nur">Night (from 8pm - 12pm)</option>
        <option data-ref="mmon" data-belong="nur">Full day (from 8am - 12am)</option>
      </select>
      <label>Period </label>
      <select class="form-control time selectFilter" data-target="cost">
        <option value="-1">--Select the duration--</option>
        <option data-ref="lmon" data-belong="nur">Less than month</option>
        <option data-ref="mon" data-belong="nur">Month</option>
        <option data-ref="mmon" data-belong="nur">More than month</option>
      </select>
        <label>Cost</label>
      <select class="form-control cost selectFilter" data-target="hours">
        <option value="-1">--Select cost--</option>
        <option data-ref="lmon" data-belong="nur">Less than $100</option>
        <option data-ref="mon" data-belong="nur">$100</option>
        <option data-ref="mmon" data-belong="nur">More than $100</option>
      </select></br>
      <div class="col-sm-5">
    <button class="btn btn-success" onclick="myFunction()">Submit</button>
    <script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Thank you for your purchase. Our operators will contact you shortly";
}
</script>
      </div>
      </div>

<div class="container">
      <div class="col-lg-6 col-md-6 col-sm-8" style="padding-left:200px;" >
        <h3>Tips for choosing a gym</h3>
           <p>Gym Hours. Between balancing work, family, and (of course) sleep — you only have so much time to spare</p>
           <p>Training Options</p>
           <p>Guest Privileges</p>
           <p>Club Locations</p>
           <p>Quality of Facility</p>
           <p>The Overall Value</p>
      </div>
      <p id="demo"></p>
</div>
</div>


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
</body>
</html>

