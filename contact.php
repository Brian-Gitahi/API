<?php
    $name=$_POST['name'];
   
   $email=$_POST['email'];
   $contact=$_POST['contact'];
   $feedback=$_POST['feedback'];
  


    $servername="127.0.0.1";

    $username="root";
    $password="";
    $database="blog";

    $connectionLink=mysqli_connect($servername,$username,$password,$database);
    $sql = "INSERT INTO `feedback`(`id`, `email`, `contact`, `feedback`) VALUES ('NULL','$email','$contact','$feedback')";
    if(!mysqli_query($connectionLink,$sql)){
  die('error');

 }else{
  echo "data inserted";
 }


 
 
?>