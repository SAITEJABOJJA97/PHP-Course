<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "ibdb_php";

$create_db = false;
$create_table = true;

// create connection

if($create_db){
    $connection = mysqli_connect($servername,$username,$password);   
}elseif($create_table){

    $connection = mysqli_connect($servername,$username,$password,$db);
}else{

       echo "Invalid";
}


//  check conn

if(!$connection){

   die("My error Connection failed:" . mysqli_connect_error());


}else{

   echo "Connected successfully!</br>";
   
   // create database 

   if($create_db){

    $sql = "CREATE DATABASE $db";

   }elseif($create_table){

    $sql = "CREATE TABLE `students` ( `student_id` INT(11) NOT NULL AUTO_INCREMENT , `student_name` VARCHAR(255) NOT NULL , `student_email` VARCHAR(255) NOT NULL , `student_add` VARCHAR(255) NOT NULL , `student_phone` VARCHAR(20) NOT NULL , `student_datecreated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`student_id`)) ;
    ";


   }else{

    echo "Invalid case!";
   }
   

   if($connection->query($sql) === TRUE){

    if($create_db){
     echo "Database created successfully!";
    
    }elseif($create_table){


        echo "Student table created successfully!";
    }else{

        echo "Invalid";
    }
   
   }else{

    if($create_db){
        echo "Error creating database!";

       
    }elseif($create_table){
   
   
      echo "Error creating Student table!";
    }else{
   
        echo "Invalid";
    }

    $connection->error;

   }



   $connection->close();

}


?>