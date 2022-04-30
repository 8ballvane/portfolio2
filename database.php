<?php
    // Global connection
    $connection = null;

    function database_connect() {
        // Use the global connection
        global $connection;

        // Server
        $server = "localhost";
        // firstname
        $firstname = "";
        $lastname = "";
        // Database
        $database = "portfolio";

        if($connection == null) {
            $connection = mysqli_connect($server, $firstname, $lastname, $database);
        }
    }

    function database_addEmployee($firstname, $lastname) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            // Insert username and hashed password
            mysqli_query($connection, "INSERT INTO employees (firstname, lastname) VALUES ('{$firstname}', '{$lastname}');");
        }
    }

    function database_deleteEmployee($username, $password) {
        global $connection;

        if($status) {
            mysqli_query($connection, "DELETE FROM employees WHERE firstname = '{$firstname}'");

        }
    }
    
    function database_verifyUser($username, $password) {
        // Use the global connection
        global $connection;

        // Create a default value
        $status = false;

        if($connection != null) {
            // Use WHERE expressions to look for username
            $results = mysqli_query($connection, "SELECT password FROM employees WHERE firstname = '{$firstname}';");
            
            // mysqli_fetch_assoc() returns either null or row data
            $row = mysqli_fetch_assoc($results);
        
        }

        return $status;
    }

    function database_close() {
        // user global connection
        global $connection;

        if($connection != null) {
            mysqli_close($connection);
        }
    }
?>