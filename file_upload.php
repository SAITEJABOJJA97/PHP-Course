<?php

//echo phpinfo();

echo "I am php file";

echo "</br>";

$target_dir = "upload/";


echo "<pre>".print_r($_FILES,true)."</pre>";



echo "</br>";

if($_FILES['file_upload']["type"] == "image/png" || $_FILES['file_upload']["type"] == "image/jpeg" ){

    echo "this is <b>".$_FILES['file_upload']["type"]."</b> and file name is <b>". $_FILES['file_upload']["name"]."</b>";

    echo "</br>";


    $target_file = $target_dir.basename($_FILES['file_upload']["name"]);

    //$uploadOk = 1;

    if(file_exists($target_file)){ // check file is exist or not

       echo "Sorry, file already exists!";


    }else{


        if($_FILES['file_upload']["size"] > 900000) // max size should be 5mb
        {

           echo "Sorry. File size is too large, please upload file less or equals to 50 KB!";

        }else{


            if(move_uploaded_file($_FILES['file_upload']["tmp_name"],$target_file)){

                echo "The file ". htmlspecialchars(basename($_FILES["file_upload"]["name"])). " has been uploaded!";
       
       
            }else{
       
                echo "Sorry, Please upload again, There is an error with uploading file!"; 
       
           }
            
        }

        }



    


}else{


    echo "Please select png or jpeg file!";
}

//


?>