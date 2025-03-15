<?php


//start the session
session_start();
 
?>

<!DOCTYPE html>
<html>
    <body>
         <?php
           // set session variables
          echo "<pre>".print_r($_SESSION,true)."</pre>";

      
          
          // session_unset(); // unset session variables

           echo "My favorite car is ". $_SESSION["favcar"]."</br>";
           
           echo "My favorite place is ". $_SESSION["favplace"]."</br>";
           
           
           echo "My site name is ". $_SESSION["sitename"]."</br>";

           

           
           $_SESSION["favcar"] = "BMW";

           $_SESSION["doors"] = "4";

           echo "<pre>".print_r($_SESSION,true)."</pre>";

           
           

          //  session_destroy(); // session delete
          

          //session_unset(); // unset session variables session data delete


          echo "<pre>".print_r($_SESSION,true)."</pre>";

          exit;

         ?>    

    </body>
</html>