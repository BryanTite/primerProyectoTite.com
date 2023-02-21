<?php 

    class DateBase{
        public static function connect($host='localhost', $user='bryan', $pwd='Titanes-1219', $db='seafoodreyna'){

            $con = new mysqli($host,$user,$pwd,$db);

            //Check connection
            if($con === false){
                die("ERROR: Could not connect.". $con->connect_error);
            }

            return $con;

        }
    }

?>