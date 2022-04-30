
<?php
    //include("security.php");

?>

<html>
  <body>
<?php

        echo("Welcome, choose to clock in or out");
        echo("<form action='signup.php' method='POST'>");
            
        echo("<label>First Name</label>");
        echo("<input type='text' placeholder='Firstname' name='firstname'>");

        echo "</br>";  
        
        echo("<label>Last Name</label>");
        echo("<input type='text' placeholder='Lastname' name='lastname'>");

        echo "</br>";  
        echo("<button type='submit'>Clock In</button>");
        echo("<button type='submit'>Clock Out</button>");


     echo("</form>");
    

?>
</body>
</html>