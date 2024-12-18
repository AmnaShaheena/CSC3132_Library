<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>library</title>
</head>
<body>
    <?php
    require_once 'conf/dbconf.php';
    require_once 'func/func.php';

    //create a page to display all available books
    echo $_SERVER['PHP_SELF'];//get the file name


joinTable($connect);
    
 
 ?> 
    
</body>
</html>