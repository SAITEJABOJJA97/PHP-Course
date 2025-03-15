<?php


/**
 * 
 * CREATE USER 'jay'@'localhost' IDENTIFIED WITH mysql_native_password AS '***';GRANT ALL PRIVILEGES ON *.* TO 'jay'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

 */

$servername = "localhost";
$username = "root";
$password = "root"; // in your system leave it blank $password = ""
$db= 'ib_training';
// create connection

$connection = mysqli_connect($servername,$username,$password);

//  check conn

if(!$connection){

   die("My error Connection failed:" . mysqli_connect_error());


}else{

   echo "Connected successfully!";


   $connection->close();

}


?>