<?php


$server_name =  "localhost";
$user_name =  "root";
$password = "";
$db_name = "urmi database";

$connection = new mysqli($server_name,$user_name,$password,$db_name);

$create_table = true;
$insert_data = false;
$delete_data =  false;

if($connection->connect_error){

 die("Connection failed:".$connection->connect_error);


}else{

    echo "Database is connected successfully!";

    if($create_table){

         $create_tbl_sql = "CREATE TABLE tutor_copy (tutor_id INT(11) AUTO_INCREMENT PRIMARY KEY, tutor_name VARCHAR(255) NOT NULL, turor_email VARCHAR(255) NOT NULL, tutor_add VARCHAR(255) NOT NULL )";


        if($connection->query($create_tbl_sql) === TRUE){
    
    
            echo "Table created!";
    
    
        }else{

        echo "Error for mysql query!";
        }

    }elseif($insert_data){


        $insert_sql = "INSERT INTO tutor_copy (tutor_name,tutor_email,tutor_add) VALUES('Danny','d@gmail.com','USA'),('peter','peter@gmail.com', 'Germany')";


        if($connection->query($insert_sql) === TRUE){
    

            $last_id = $connection->insert_id;
    
            echo "</br>Data inserted successfully!";
            echo "</br> Last inserted id is $last_id";
        
    
        }else{
    
            echo "Error: ". $insert_data . "</br>". $connection->error;
        }


    }elseif($delete_data){
            
        $delete_sql= "DROP TABLE tutor_copy";

        if($connection->query($delete_sql) === TRUE){

        echo("This table has been deleted.");
        
        }else{
        echo("This table has not been deleted.");
        echo "Error: ". $delete_data . "</br>". $connection->error;

        }
    
            
    }else{

        echo "invalid case!";
    }
    

    $connection->close();

}
?>