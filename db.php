<?php 


$connection = mysqli_connect('localhost','root','root','loginapp');   
    if(!$connection) {
    die("Database connection failed"); 
    }

    $query = "SELECT * FROM users"; 
   // Debug code 
   //echo $query;
  //  die("this is the end");
    $result = mysqli_query($connection, $query); 

    if(!$result) {


        die('QUERY FAILED' . mysqli_error());


    }
?>

