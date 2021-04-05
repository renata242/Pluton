<?php
    require('connect.php');
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

  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <li class=""><a href="purchase.php">Booking</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
        Tips list <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="diet.php">Diet</a></li>
            <li><a href="sport.php">Sport</a></li>
          </ul>
        </li> 
        <li class="active"><a href="comment.php">Feedback</a></li>   
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"> <span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Log out</a></li>
    </ul>
    </div>
</nav>
<?php
$sql = "SELECT * from comment ORDER BY id";

$result = mysqli_query($conn,$sql);

    if (mysqli_error($conn)) {
        # code...

        echo 'the error of mysql '.mysqli_error($conn);
    }
    else {
        
        
        
        $article = mysqli_fetch_all($result,MYSQLI_NUM);

        // print_r($article);
        // print('<br>');

        // var_dump($article);

        print "<table border='1px'>";
        for ($i=0; $i < count($article); $i++) {
            # code...
            print '<tr>';
            for ($j=0; $j < count($article[$i]); $j++) {
                # code...
                print '<td>';
                print $article[$i][$j];
                print '</td>';
            }



            print '</tr>';

        }
        print "</table>";
    }



?>
<div class="jumbotron text-center" style="margin:0px;">
    <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 " style="background-color: white; padding:10px;">
            <p>
              <form action="edit.php" method="get">
                <div class="form-group">
                  
                    <label for="firstName" class="col-sm-3 control-label">id</label>
                    <div class="col-sm-7">
                        <input type="text" id="id" placeholder="id of comment" class="form-control" name="id" autofocus></br>
                    </div>
                </div>
                <div class="form-group">
                  
                    <label for="firstName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-7">
                        <input type="text" id="username" placeholder="First Name" class="form-control" name="namePort" autofocus></br>
                    </div>
                </div>
                    <div class="form-group">
                      <label for="firstName" class="col-sm-3 control-label">Comment:</label>
                      <div class="col-sm-7">
                      <textarea class="form-control " rows="7" id="comment" name="commentPort"></textarea></br>
                    </div>
                   </div>
                  <div class="form-group">
                  <div class="col-sm-2">
                  <button type="submit" class="btn btn-primary  btn-lg btn-block" name="edit">Submit</button>
                  </div>
                  
                </div>
                </form>
            </p>
          </div>

<?php
    if (isset($_REQUEST['edit'])) {
        # code...
        $id = $_REQUEST['id'];
        $namePort = $_REQUEST['namePort'];
        $commentPort = $_REQUEST['commentPort'];


               $sql = "UPDATE `comment` SET `username` = '".$_REQUEST['namePort']."', `content` = '".$_REQUEST['commentPort']."'
        WHERE `comment`.`id` = '".$_REQUEST['id']."';";
        $result = mysqli_query($connect,$sql);

     

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


    }


?>

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













