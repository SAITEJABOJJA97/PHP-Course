<?php

//echo print_r($_POST,true);

//echo "<pre>".print_r($_SERVER,true)."</pre>";



if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo "<pre>".print_r($_POST,true)."</pre>";


    if(isset($_POST['student_email_2']) AND $_POST['student_email_2']!=''){

        //echo "tets";
     
        $s_email = $_POST['student_email_2'];
        if(!filter_var($s_email,FILTER_VALIDATE_EMAIL)){
            
            $s_email_err = "Invalid Email";

        }else{

            echo "email is validated!";
        }

    }else{
    
        echo  "Please insert emailid";

     }

}else{

    echo "Please use POST method!";
}

//$sql = "INSERT INTO `students` (`student_id`, `student_name`, `student_email`, `student_add`, `student_phone`, `student_datecreated`) VALUES (NULL, 'Urmi Shah', 'urmi@gmail.com', 'UK', '077766554433', CURRENT_TIMESTAMP);"

/**
 *  location API
 *   
 *   url : https://sip.com/location_get.php?getlocation
 *   post :  {"getlocation":true}
 * 
 */



?>