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
    $sql = "CREATE DATABASE $db";

    $success_msg = "Database created successfully!";
    $error_msg = "Error creating database!";

}elseif($create_table){

    $connection = mysqli_connect($servername,$username,$password,$db);

    $sql = "CREATE TABLE `students2` ( `student_id` INT(11) NOT NULL AUTO_INCREMENT , `student_name` VARCHAR(255) NOT NULL , `student_email` VARCHAR(255) NOT NULL , `student_add` VARCHAR(255) NOT NULL , `student_phone` VARCHAR(20) NOT NULL , `student_datecreated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`student_id`)) ;
    ";

    $success_msg = "Student table created successfully!";
    $error_msg = "Error creating table!";

}else{

       echo "Invalid";
}


//  check conn

if(!$connection){

   die("My error Connection failed:" . mysqli_connect_error());


}else{

   echo "Connected successfully!</br>";
   
   if($connection->query($sql) === TRUE){

       echo $success_msg;
   }else{
        if($create_db){
        
            echo $error_msg;
            $connection->error;

        }

    }

   $connection->close();

}


?>