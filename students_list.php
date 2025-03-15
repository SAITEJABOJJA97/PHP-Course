
<?php


// echo print_r($_GET['type'],true);




// Mysql credentials
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "saiTeja_demo"; 


// Create connection
$connection = new mysqli($servername,$username,$password,$dbname);


function student_as_table($connection){

    $sql =  "SELECT * FROM `students`";


    $result = $connection->query($sql);

     //echo '<pre>'.print_r($result,true).'</pre>';



    if($result->num_rows > 0){

       echo " <style>

            table,td,th {

                border:1px solid BLACK;

            }

            </style>";


        echo "<table>
              <tr> 
                  <th>Student Id</th>
                  <th>Student Name</th>
                  <th>Student Email</th>
                  <th>Student Address</th>
                  <th>Student Phone</th>
                  <th>Student Marks</th>
  
               </tr>

        ";

        

        while($student =  $result->fetch_assoc()){

          //  echo '<pre>'.print_r($student,true).'</pre>';

              echo "<tr>
                      <td>".$student['student_id']."</td>
                      <td>".$student['student_name']."</td>
                      <td>".$student['student_email']."</td>
                      <td>".$student['student_add']."</td>
                      <td>".$student['student_phone']."</td>
                      <td>".$student['student_marks']."</td>
                    </tr>   ";

            //echo '<pre>'.print_r($student,true).'</pre>'; 

        }

        echo "</table>";


    }else{

        echo "There are no any students!";
 
     }
 


}


function student_as_api($connection){

    $sql =  "SELECT * FROM `students`";


    $result = $connection->query($sql);

   // echo '<pre>'.print_r($result,true).'</pre>';exit;



    if($result->num_rows > 0){

        
        $students_result = array();


        while($student =  $result->fetch_assoc()){


           array_push($students_result,$student);
              
            
            // echo '<pre>'.print_r($student,true).'</pre>'; 

        }

        // echo '<pre>'.print_r($students_result,true).'</pre>'; exit;



       echo   json_encode($students_result,true);




    }else{

        echo "There are no any students!";
 
     }
 

     /**
      * 


    
    




      */


}



if($connection){


    //echo "Database Connnected successfully!";

    if($_GET['students_data'] == 'api'){

        // echo "I am API";
       student_as_api($connection);

    }elseif($_GET['students_data'] == 'table'){

        // echo "I am table";

       student_as_table($connection);   
    
    }else{

       echo "Invalid Case!";

    }

    exit;
  
}else{
  
  
    echo "Connection did not created!"."</br>";
    die("Connection is failed: ". $connection->connect_error );
  
  
}


?>