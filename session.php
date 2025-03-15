<?php


/**  
 * start session : session_start()
 * 
 * $_SESSION
 *   
 * 
 * 
 */


//start the session
 session_start();
 
?>

<!DOCTYPE html>
<html>
    <body>
         <?php
           // set session variables

           $_SESSION["favcar"] = "AUDI";
           $_SESSION["favplace"] = "UK";
           $_SESSION["sitename"] = "vineela_localhost";

           echo "Session variable are set!";

           


         ?>    

    </body>
</html>