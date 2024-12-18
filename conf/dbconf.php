<?php
//constant variable
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DNAME','library');


//connect with database
$connect=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DNAME);
try{
    if (!$connect){
        die("connection failed".mysqli_connect_error());
    }
    else{
        echo "";
    }

}
catch (Exception $e){
    die($e->getMessage());
}
 //echo"abc<br>";
?>