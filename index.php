
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

        echo("<a href='clockin.php'> Clock In</a>") ; 
        echo("<a href='clockout.php'> Clock Out</a>") ; 
        echo("<a href='addnew.php'> Add New Employee</a>");
        echo("<a href='remove.php'> Remove Employee</a>");



     echo("</form>");
    

?>
</body>
</html>