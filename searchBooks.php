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

    //create a page to search book name
    echo $_SERVER['PHP_SELF'];//get the file name
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <table>
        <tr>
            <td><strong>Book Name :</strong> </td>
            <td><input type="text" name="bkname"></td>
        </tr>
        <tr>
            <td></td>
        <td ><input type="submit" value="search"></td>
        </tr>
    </table>
</form>

 <?php
 if(isset($_GET['bkname']) && $_GET['bkname'] != ''){
    searchBook($_GET['bkname'],$connect);
 }
 ?> 

    
</body>
</html>