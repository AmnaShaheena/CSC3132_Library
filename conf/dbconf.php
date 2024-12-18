<?php
//constant variable
define('SERVERNAME','127.0.0.1:3306');
define('USERNAME','root');
define('PASSWORD','mariadb');
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