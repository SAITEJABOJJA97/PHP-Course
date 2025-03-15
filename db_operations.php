<?php


$server_name =  "localhost";
$user_name =  "root";
$password = "root";
$db_name = "ibdb_php";


// make connection with mysql database
$connection = new mysqli($server_name,$user_name,$password,$db_name);

// make connection with mysql
//$connection = new mysqli($server_name,$user_name,$password);


$create_table = false;
$insert_data = false;
$update_data =  true;


// check 
if($connection->connect_error){

 die("Connection failed:".$connection->connect_error);


}else{

    echo "Database is connected successfully!</br>";


    // create table 

    if($create_table){

        $create_tbl_sql = "CREATE TABLE student_copy (student_id INT(11) AUTO_INCREMENT PRIMARY KEY, student_name VARCHAR(255) NOT NULL, student_email VARCHAR(255) NOT NULL, student_add VARCHAR(255) NOT NULL )";


        if($connection->query($create_tbl_sql) === TRUE){
    
    
            echo "Table created!";
    
    
        }else{
    
            echo "Error for mysql query!";
    
        }

    }elseif($insert_data){

        // $insert_sql = "INSERT INTO student_copy (student_name,student_email,student_add) VALUES('Danny','d@gmail.com','USA'),('peter','peter@gmail.com', 'Germany')";


        // if($connection->query($insert_sql) === TRUE){
    
        //     echo "<pre>".print_r($connection,true)."</pre>";
        //     $last_id = $connection->insert_id;
    
        //     echo "</br>Data inserted successfully!";
        //     echo "</br> Last inserted id is $last_id";
         
    
        // }else{
    
        //     echo "Error: ". $insert_data . "</br>". $connection->error;
    
        // }
 

        // binding values with insert

       $insert_sql = $connection->prepare("INSERT INTO student_copy (student_name,student_email,student_add) VALUES( ?, ?, ?)");

        $insert_sql->bind_param('sss',$s_name,$s_email,$s_add);


        $s_name = "joy";
        $s_email = "joy@gmail.com";
        $s_add =  "AUS";
        $insert_sql->execute();



        $s_name = "maria";
        $s_email = "maria@gmail.com";
        $s_add =  "UK";
        $insert_sql->execute();

        echo "</br>Data inserted successfully!</br>";

        //$insert_sql->close();





    }elseif($update_data){



        //$update_sql = "INSERT INTO student_copy (student_name,student_email,student_add) VALUES('Danny','d@gmail.com','USA'),('peter','peter@gmail.com', 'Germany')";

        $update_sql = "UPDATE student_copy set student_name = 'jay' where student_id in(3,4)";


        
        if($connection->query($update_sql) === TRUE){
    

            //$last_id = $connection->insert_id;
            // echo "<pre>".print_r($connection,true)."</pre>";

            // echo $connection->affected_rows . " row is updated.";
            if($connection->affected_rows > 1){
                echo $connection->affected_rows . " rows are updated.";
            }else{
                echo $connection->affected_rows . " row is updated.";
            }
            echo "</br>Data Updated successfully!";

            //echo "</br> Last inserted id is $last_id";
         
    
        }else{
    
            echo "Error: ". $update_sql . "</br>". $connection->error;
    
        }




    }else{

        echo "invalid case!";
    }
  

    $connection->close();

}



?>