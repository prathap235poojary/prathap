<?php
$name = $_POST['name'];
$city = $_POST['city'];
$occupation = $_POST['occupation'] ;



if (!empty($name) || !empty($city) || !empty($occupation))
 {
    $host = "localhost";
    $dbUsername = "test";
    $dbPassword = "Asdf@1234";
    $dbname = "test";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else
    {
     
      $INSERT = "INSERT Into formdata (name,city,occupation) values(?,?,?)";
     //Prepare statement
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss",$name,$city,$occupation);
      $stmt->execute();
      echo "New record inserted sucessfully";
     $stmt->close();
     $conn->close();
    }
} 
else 
{
 echo "All field are required";
 die();
}
?>