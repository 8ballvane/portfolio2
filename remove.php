<?php
    include("security.php");

    if($status) {
    security_deleteEmployee();
    }

?>

<html>
    <body>
        <?php
        if (security_validate()) {
            echo("<form action='remove.php' method='POST'>");
            
            echo("<label>First Name</label>");
            echo("<input type='text' placeholder='First Name' name='firstname'>");

            echo "</br>";  
            
            echo("<label>Last Name</label>");
            echo("<input type='text' placeholder='Last Name' name='lastname'>");

            echo "</br>";  
            echo("<button type='submit'>Remove Employee Info</button>");

         echo("</form>");

        }
        else (
            echo("<a href='addnew.php'> Add New Employee</a>");

        )
    
        ?>
    </body>    
</html> 