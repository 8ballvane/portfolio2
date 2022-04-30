<?php
    include('security.php')
?>


<html>
    <head>
        <title>Remove Employee</title>
    </head>
    <body>

    <?php
    if(security_validate()) {
        echo("Employee removed");
        echo ("</br>");  
        echo("<a href='index.php'>Home</a>");
    }
    else {
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
        if(security_validate()) {
             security_deleteEmployee();
        }

        ?>
    </body>
</html>



