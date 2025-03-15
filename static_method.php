<?php


class Students {

    public static $uni_name = "Greenwich";

    public static function student_info(){

        echo "I am student info method";
    }

    public function s_intro(){

        self::student_info();
        echo "</br>";
        echo self::$uni_name;
    }
}

// Students:: student_info();

// echo '</br>'.Students:: $uni_name;


$s1 = new Students();
$s1->s_intro();

echo "</br>";
//echo Students:: $uni_name;

?>