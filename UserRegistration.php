<?php

  if($_SEVER['REQUEST_METHOD'] == 'POST') {
  
    include 'DatabaseConfig.php';

    $con = mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName);

    $name = $_POST['name'];
    $schoolName = $_POST['schoolName'];
    $password = $_POST['password'];
    $identity = $_POST['identity'];

    $CheckSQL = "SELECT * FROM student_profile_test WHERE identity='$identity'";
    
    $check = mysqli_fetch_array(mysqli_query($con, $CheckSQL));

    if(isset($check)) {
      echo 'Email Already Exists';
    } else {
      $sql_Query = "INSERT INTO student_profile_test (name, school_name, password, identity) VALUES ('$name', '$schoolName', '$password', '$identity')";
        if(mysqli_query($con, $sql_Query)) {
          echo 'Registration Successful';
        } else {
          echo 'Something went wrong';
        }
    }

  }

  mysqli_close($con);
?> 