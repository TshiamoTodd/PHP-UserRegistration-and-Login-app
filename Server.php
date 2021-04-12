<?php
  
  $name;
  $password;
  $schoolName;
  $identity;

  include("./DatabaseConfig.php");

  $connection = mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName);
  
  if(isset($_POST['submit']) {
    $name = mysql_escape_string($_POST['name']);
    $password = mysql_escape_string($_POST['password']);
    $schoolName = mysql_escape_string($_POST['schoolName']);
    $identity = mysql_escape_string($_POST['identity']);

    $sql = "INSERT INTO student_profile_test (name, password, school_name, identity) VALUES ('$name', '$password', '$schoolName', '$identity')";
    
    mysqli_query($connection, $sql);
  }
?>
