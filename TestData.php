<?php
  
  $name;
  $password;
  $schoolName;
  $identity;

  $connection = mysqli_connect("sql100.epizy.com", "epiz_22201478", "mokwenaTT", "epiz_22201478_seasyinfo_test_database");
  
  if(isset($_POST['submit']) {
    $name = mysql_escape_string($_POST['name']);
    $password = mysql_escape_string($_POST['password']);
    $schoolName = mysql_escape_string($_POST['schoolName']);
    $identity = mysql_escape_string($_POST['identity']);

    $sql = "INSERT INTO student_profile_test (name, password, school_name, identity) VALUES ('$name', '$password', '$schoolName', '$identity')";
    
    mysqli_query($connection, $sql);
  }
?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <title> Testing Database | One </title>
    </head>
<body>
  <form method="POST">
    <label>Name: </label>
    <input type="text" name="name"><br/><br/>
    <label> School Name: </label>
    <input type="text" name="schoolName"/><br/><br/>
    <label> Password: </label>
    <input type="password" name="password"/><br/><br/>
    <label>ID: </label>
    <input type="number" name="identity"/><br/><br/> 
    <input type="submit" name="submit"/>
  </form>
</body>
</html>