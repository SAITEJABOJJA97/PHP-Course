<?php

function division($dividend,$divisor){

  if($divisor == 0){
    
    throw new Exception("Divide by zero error!",13);

  }

  return $dividend/ $divisor;


}




try {

  $result = division(10,0);

  echo $result;

}catch(Exception $error){

  $code = $error->getCode();
  $msg = $error->getMessage();

  $file_name = $error->getFile();
  $line = $error->getLine();

  echo "Unable to perform operation! </br>";
  echo "Code $code , $msg </br>";

  echo "File name is : ". $file_name ."</br>";
  echo "Line number is :" .$line ."</br>";



  
 
}finally{

  echo "</br>";


  echo "Execution completed!";

}




?>