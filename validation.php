
<?php 
session_start();
header('location:login.php');


$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "project";

$connect = new mysqli($host, $user, $pass, $dbname);


if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
    $fullname=$_POST['fullname'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];


    $s = "SELECT * FROM registr where username = '".$name."' && password ='".$pass."' ";
    $result = mysqli_query($connect, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $name;
      header('location:home.php');
    }
    else{
      header('location:signup.php');
    }

 ?>