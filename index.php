
<?php
    //include("security.php");

?>

<html>
  <body>
<?php

        echo("Welcome to the employee timecard system!");
        echo ("</br>");  
        echo("<form action='signup.php' method='POST'>");
            
        echo("<label>First Name</label>");
        echo("<input type='text' placeholder='First Name' name='firstname'>");

        echo ("</br>");  
        
        echo("<label>Last Name</label>");
        echo("<input type='text' placeholder='Last Name' name='lastname'>");

        echo ("</br>");  
        echo ("</br>");  

        echo("<button type='submit'>Clock In</button>");
        echo("<button type='submit'>Clock Out</button>");


     echo("</form>");
    

?>
</body>
</html>