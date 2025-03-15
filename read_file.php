<!DOCTYPE html>

<html>
    <body>
        <?php

        //echo readfile("read.txt");


        /**
         * a = only update / write
         * x = only create new file
         * r = read only
         * w =  write   
         * r+ = file pointer starts at the beginning of the file (read and write)
         * w+ = Erases the containts of the file or creates a new file if doesn't exist. file pointer starts at the beginning of the file(read and write) 
         * a+ = It will preserve existing data of the file. file pointer starts at the beginning of the file (read and write )
         * x+ =  Create a new file for read/write :  Returns FALSE and error if the file already exist in given path.
         */



        //$nyfile = "read.txt";
        //$mydoc = fopen("read.txt","a")  or die("unable to open file");

       
       //echo fwrite($mydoc," My husband name is karan");

       echo "</br>";
       //echo fread($mydoc,filesize("read.txt"));
       //echo readfile("read.txt");


       $mydoc2 = fopen("urmi_read.txt","x") or die("Unable to open file");
       
       $text_add = "I am urmi\n";
       fwrite($mydoc2, $text_add);

       $text_add = "I am urmi\n";
       fwrite($mydoc2, $text_add);

       //echo fgetc($mydoc2);
       fclose($mydoc2);




        ?>
    </body>

</html>