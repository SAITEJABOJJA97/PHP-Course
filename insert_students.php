<?php

//echo "test students";


// echo '<pre>'.print_r($_POST,true).'</pre>';
// exit;
// Mysql credentials
$servername = "localhost";
$username = "root";
$password = "home1234";
$dbname = "urmi_database_v2";

//form data
$student_id =  "'".$_POST['student_id']."'";
$student_name =  "'".$_POST['student_name']."'";// 'jaypal'
$student_email = "'". $_POST['student_email']."'";
$student_add =  "'".$_POST['student_add']."'";
$student_phone =  "'".$_POST['student_phone']."'";
$student_module_id =  "'".$_POST['student_module_id']."'";
// $student_module_duration =  "'".$_POST['student_module_duration']."'";


/*
$student_name =  $_POST['student_name'];
$student_email = $_POST['student_email'];
$student_add =  $_POST['student_add'];
$student_phone = $_POST['student_phone'];
$student_module = $_POST['student_module'];
*/


// Create connection
$connection = new mysqli($servername,$username,$password,$dbname);

if($connection){
  
  echo "Database Connnected successfully!";


  $opration = "insert";

  if($opration == "insert"){

    //$sql =  "INSERT INTO  students (student_name,student_email,student_add,student_phone,student_module) VALUE ('".$student_name."','".$student_email."','".$student_add."','".$student_phone."','".$student_module."')";
    $sql_student =  "INSERT INTO  students (student_mid,student_name,student_add,student_email,student_phone) VALUE ($student_module_id,$student_name,$student_add,$student_email,$student_phone)";

    //$sql_module = "INSERT INTO module(module_name,module_type,module_duration) VALUE ($student_module,$student_module_tyoe,$student_module_duration)";

    // echo $sql;
    // exit;
  }else if($opration == "update"){
    
    $sql_student =  "UPDATE students set student_name = $student_name, student_add = $student_add, student_email = $student_email, student_phone=$student_phone where student_id = $student_id ";

    //echo $updateSql ;exit;

  }else{

    // nothing
    echo "Invalid operation!";

  }



  $result_student = $connection->query($sql_student);

  //$result_module = $connection->query($sql_module);

  if($result_student === TRUE){
      
    echo '<pre>'.print_r($result_student,true).'</pre>';
    echo "Record Updated!";

  }else{

    echo  "Error: " . $sql_student . '</br>' . $connection->error;

  }

 $connection->close();
  
}else{
  
  
    echo "Connection did not created!"."</br>";
    die("Connection is failed: ". $connection->connect_error );
  
  
  }




?>