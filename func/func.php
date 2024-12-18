<?php

function showTable($tname,$connect){
try {
   $sql = "SELECT * FROM $tname";
    
      
  $result = mysqli_query($connect, $sql);
 
    
        if (mysqli_num_rows($result) > 0) {
       
            echo "<table border='1' >";
            echo "<tr>";
            
            $columns = mysqli_fetch_fields($result);
            foreach ($columns as $column) {
               
    
                echo "<th>$column->name</th>";
            }
            echo "</tr>";
    
            
            while ($row = mysqli_fetch_assoc($result)) {
                
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }      
            echo "</table>";
        } else {
            echo "No result";
        }
      
}
catch (Exception $e) {
    die($e->getMessage());
}
}



function showTable1($tname,$connect,$colnames){
    try {
       $sql = "SELECT ";
        for($i=0; $i<sizeof($colnames)-1; $i++){
            $sql.=$colnames[$i].",";
        }
      $sql.=$colnames[sizeof($colnames)-1]." FROM $tname "; 

      $result = mysqli_query($connect, $sql);
     
        
            if (mysqli_num_rows($result) > 0) {
           
                echo "<table border='1' >";
                echo "<tr>";
                
                $columns = mysqli_fetch_fields($result);
                foreach ($columns as $column) {
                   
        
                    echo "<th>$column->name</th>";
                }
                echo "</tr>";
        
                
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }      
                echo "</table>";
            } else {
                echo "No result";
            }
          
    }
    catch (Exception $e) {
        die($e->getMessage());
    }
    }
   
    //search books by the name
    function searchBook($name,$connect){
        try {
           $sql = "SELECT * FROM Books where title like '%$name%'";
            
              
          $result = mysqli_query($connect, $sql);
         
            
                if (mysqli_num_rows($result) > 0) {
               
                    echo "<table border='1' >";
                    echo "<tr>";
                    
                    $columns = mysqli_fetch_fields($result);
                    foreach ($columns as $column) {
                       
            
                        echo "<th>$column->name</th>";
                    }
                    echo "</tr>";
            
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                        echo "<tr>";
                        foreach ($row as $value) {
                            echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }      
                    echo "</table>";
                } else {
                    echo "No result";
                }
              
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    function getName($connect){
        try {
           $sql = "SELECT * FROM books ";
            
              
          $result = mysqli_query($connect, $sql);
         
            
                if (mysqli_num_rows($result) > 0) {
               
                    echo "<table border='1' >";
                    echo "<tr>";
                    
                    $columns = mysqli_fetch_fields($result);
                    foreach ($columns as $column) {
                       
            
                        echo "<th>$column->name</th>";
                    }
                   
                    echo "</tr>";
            
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                        echo "<tr>";
                        foreach ($row as $value) {
                            echo "<td>$value</td>";
                            
                        }
                        $id=$row['id'];

                       
                        echo "</tr>";
                    }      
                    echo "</table>";
                } else {
                    echo "No result";
                }
              
        }
        catch (Exception $e) {
            die($e->getMessage());
        }

    }
   

    function getDetails($book_id,$connect){
        try {
            $sql = "SELECT * FROM Books WHERE book_id=$book_id ";
            
              
          $result = mysqli_query($connect, $sql);
         
            
                if (mysqli_num_rows($result) > 0) {
               
                    echo "<table border='1' >";
                    echo "<tr>";
                    
                    $columns = mysqli_fetch_fields($result);
                    foreach ($columns as $column) {
                       
            
                        echo "<th>$column->name</th>";
                    }
                    echo "</tr>";
            
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                        echo "<tr>";
                        foreach ($row as $value) {
                            echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }      
                    echo "</table>";
                } else {
                    echo "No result";
                }
              
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }


    function joinTable($connect){
        try {
            $sql = "SELECT title,genre,published_year,name,birth_year FROM Books as b
            inner join Book_Authors as ba on b.book_id=ba.book_id
            inner join Authors as a on a.author_id=ba.author_id";
            
              
          $result = mysqli_query($connect, $sql);
         
            
                if (mysqli_num_rows($result) > 0) {
               
                    echo "<table border='1' >";
                    echo "<tr>";
                    
                    $columns = mysqli_fetch_fields($result);
                    foreach ($columns as $column) {
                       
            
                        echo "<th>$column->name</th>";
                    }
                    echo "</tr>";
            
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                        echo "<tr>";
                        foreach ($row as $value) {
                            echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }      
                    echo "</table>";
                } else {
                    echo "No result";
                }
              
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

        
function showAvailableBooks($tname,$connect,$colnames){
    try {
       $sql = "SELECT ";
        for($i=0; $i<sizeof($colnames)-1; $i++){
            $sql.=$colnames[$i].",";
        }
      $sql.=$colnames[sizeof($colnames)-1]." FROM $tname "; 

      $result = mysqli_query($connect, $sql);
     
        
            if (mysqli_num_rows($result) > 0) {
           
                echo "<table border='1' >";
                echo "<tr>";
                
                $columns = mysqli_fetch_fields($result);
                foreach ($columns as $column) {
                   
        
                    echo "<th>$column->name</th>";
                }
                echo "<td>View students details</td>";
                echo "</tr>";
        
                
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>$value</td>";
                    }
                    $author_id=$row['author_id'];

                    echo "<td><a href='authordet.php?id=$author_id'>View</a></td>";
                    echo "</tr>";
                }     
                 
                echo "</table>";
            } else {
                echo "No result";
            }
          
    }
    catch (Exception $e) {
        die($e->getMessage());
    }
    }
?>