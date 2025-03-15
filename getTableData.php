<?php
//http://localhost/Urmi/getTableData.php?type=api&table=students



function getData($tableName,$type =null){

    
    $servername = "localhost";
    $username = "root";
    $password = "home1234";
    $db = "urmi_database_v2";

    $connection = mysqli_connect($servername,$username,$password,$db);

    if(!$connection)
    {

        echo "fail";

    }else{

       // echo "connected";
       $query = "select * from $tableName";
    
        if($result = $connection->query($query)){

            if($result->num_rows  > 0){
            
                $tableData = array();
                while($rowdata = $result->fetch_assoc()){
        
                //echo '<pre>'.print_r($rowdata,true).'</pre>';
                array_push($tableData,$rowdata);
        
                }
        
                if($type == 'api'){
        
                    echo json_encode($tableData,true);
        
                }else{
                    return $tableData;
                }
        
        
                //echo '<pre>'.print_r($students,true).'</pre>';
                
        
            }else{
        
        
                return "There is no more data for $tableName!";
            }

        }else{


            echo 'Please check sql! : '. $query  ;
        }

       //echo '<pre>'.print_r($query,true).'</pre>';

    
    }


    

}


$studentData = getData('students');

$trainerData = getData('trainer');

$moduleData = getData('module');

$sessionData = getData('sessions');

// echo '<pre>'.print_r($sessionData,true).'</pre>';exit;


?>
<?php 
    if(!isset($_GET['type'])){
?>

<html>
</br>
Student List : 
<select name="student_id">
 <option value = ''>Please select student name</option>
    <?php 

    foreach($studentData as $skey=>$sval){

      //  echo '<pre>'.print_r($sval['student_id'],true).'</pre>';
    // echo '<pre>'.print_r($sval['student_name'],true).'</pre>';

        $sId =  $sval['student_id'];
        $sName = $sval['student_name'];
       echo " <option value = '$sId'>$sName</option>";
    }

    ?>
</select>       
</br>
</br>
Trainer List : 
<select name="trainer_id">
<option value = ''>Please select Trainer name</option>
    <?php 

    foreach($trainerData as $tkey=>$tval){
      //echo '<pre>'.print_r($tval,true).'</pre>';
  
        $tId =  $tval['trainer_id'];
        $tName = $tval['trainer_name'];
        echo " <option value = '$tId'>$tName</option>";
    }

    ?>
</select>       
</br>
</br>
Module List : 
<select name="module_id">
<option value = ''>Please select Module name</option>
    <?php 

    foreach($moduleData as $mkey=>$mval){

        $mId =  $mval['module_id'];
        $mName = $mval['module_name'];
       echo " <option value = '$mId'>$mName</option>";
    }

    ?>
</select>



</br>
</br>
Sessions List : 
<select name="session_id">
<option value = ''>Please select Session name</option>
    <?php 

    foreach($sessionData as $sekey=>$seval){

        $seId =  $seval['session_id'];
        $seName = $seval['session_topic'];
       echo " <option value = '$seId'>$seName</option>";
    }

    ?>
</select>


</html>

<?php 
  
    }elseif($_GET['type'] == 'api' AND isset($_GET['table'])){

       getData($_GET['table'], $_GET['type']);

    }else{


        echo 'Invalid url or calling method please contact Admin!';
    }
?>
