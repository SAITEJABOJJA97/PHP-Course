<?php

//echo "test students";


// Mysql credentials
$servername = "localhost";
$username = "root";
$password = "home1234";
$dbname = "urmi_database_v2";

// Create connection
$connection = new mysqli($servername,$username,$password,$dbname);

if($connection){


    echo "Database Connnected successfully!";
  
  }else{
  
  
    echo "Connection did not created!"."</br>";
    die("Connection is failed: ". $connection->connect_error );
  
  
  }

  $opration = "select";

  if($opration == "select"){

    $sql_student =  "SELECT * FROM students";

    
  }else{

    // nothing
    echo "Invalid operation!";

  }

  $result_student = $connection->query($sql_student);

  //$result_module = $connection->query($sql_module);
  //echo '<pre>'.print_r($result_student,true).'</pre>';exit;
  $field_value = '';

  if($result_student->num_rows  > 0){
     
    while($rowdata = $result_student->fetch_assoc()){

      //echo '<pre>'.print_r($rowdata,true).'</pre>'; 
      //echo "id : " . $rowdata['id'] .", First Name : " . $rowdata['first_name'].", Last Name : ". $rowdata['last_name']; 

      $student_id = $rowdata['student_id'];
      $student_mid = $rowdata['student_mid'];
      $student_name = $rowdata['student_name'];
      $student_add = $rowdata['student_add'];
      $student_email = $rowdata['student_email'];
      $student_phone = $rowdata['student_phone'];
      $student_marks = $rowdata['student_marks'];
      $student_datecreated = $rowdata['student_datecreated'];

      //$field_value .= $student_id."~".$student_mid."~".$student_name."~".$student_add."~".$student_email."~".$student_phone."~".$student_marks."~".$student_datecreated." \n";
      $field_value .= $student_id.",".$student_mid.",".$student_name.",".$student_add.",".$student_email.",".$student_phone.",".$student_marks.",".$student_datecreated." \n";


      //echo "<pre>".print_r($rowdata,true)."</pre>";

    }

    //echo $field_value;
   
  }else{

    echo "Record not found";

  }

  $myfile = fopen("export_student_data_20230606_V1.csv", "w") or die("Unable to open file!");

 // $txt = "Student ID~Student Mid~Student Name~Student Add~Student Email~Student Phone~Student Marks~Student DateCreated\n";

  $txt = "Student ID,Student Mid,Student Name,Student Add,Student Email,Student Phone,Student Marks,Student DateCreated\n";

  fwrite($myfile, $txt);
  $txt = $field_value." \n";
  fwrite($myfile, $txt);
  fclose($myfile);



  $connection->close();


?>