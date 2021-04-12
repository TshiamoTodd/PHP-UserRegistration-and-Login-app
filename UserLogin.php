<?php
  
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'DatabaseConfig.php';

    $con = mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName);

    $identiy = $_POST['identity'];
    $password = $_POST['password'];

    $Sql_Query = "SELECT * FROM student_profile_test WHERE identity = '$identity' AND password = '$password'";
    $check = mysqli_fetch_array(mysqli_query($con, $Sql_Query));

    if(isset($check)) {
      echo "Data Matched";
    } else {
      echo "Invalid Username or Password Please Try Again";
    }

    } else {
      echo "Check Again";
    }

    mysqli_close($con);
?>
        