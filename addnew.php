<?php
    include('security.php')
?>


<html>
    <head>
        <title>Add New Employee</title>
    </head>
    <body>

    <?php
    if(security_validate()) {
        echo("<a href='index.php'>Home</a>");
    }
    else {
        echo("<form action='addnew.php' method='POST'>");
            
            echo("<label>First Name</label>");
            echo("<input type='text' placeholder='First Name' name='firstname'>");

            echo "</br>";  
            
            echo("<label>Last Name</label>");
            echo("<input type='text' placeholder='Last Name' name='lastname'>");

            echo "</br>";  
            echo("<button type='submit'>Add Employee</button>");

         echo("</form>");

    }
        if(security_validate()) {
             security_addEmployee();
        }

        ?>
    </body>
</html>
