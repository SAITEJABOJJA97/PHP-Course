<?php



// setcookies()
// setcookies(name, value, expire, path, domain, secure. httponly);
/**
 *  user :  Urmi
 *  expire time : 30 days (86400 * 30) 
 *  "/" : the cookie is available in entire website (or select manual dirctory path)
 * 
 * $_COOKIE
 * 
 * isset()
 */


$cookie_name = "user";
$cookie_value = "Urmi";

if(count($_COOKIE) == 0){

   setcookie($cookie_name, $cookie_value, time()+60, "/"); // 86400 = 1 day
   //$cookies_allow = false;
   //setcookie("user", "jay", time()+60, "/"); // 86400 = 1 day
}


?>


<html>
   <body>
      <?php



         if(count($_COOKIE) > 0 AND isset($_COOKIE[$cookie_name])){

            echo "Cookie '". $cookie_name ."' is set!</br>";
            echo "Value is ". $_COOKIE[$cookie_name];
            

         }else{
            
            echo "Cookie named '" . $cookie_name . "' is not set!";


            }

            echo "</br>";
            // check cookies is enable or disabled
         if(count($_COOKIE) > 0){

            echo "Cookies are enabled!";

         }else{

            echo "Cookies are disabled!";


         }



      ?>

   </body>

</html>