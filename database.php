<?php
    // Global connection
    $connection = null;

    function database_connect() {
        // Use the global connection
        global $connection;

        // Server
        $server = "localhost";
        $username = "root";
        $password = "";
        // Database
        $database = "portfolio";

        if($connection == null) {
            $connection = mysqli_connect($server, $username, $password, $database);
        }
    }

    function database_addEmployee($firstname, $lastname) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            mysqli_query($connection, "INSERT INTO employees (firstname, lastname) VALUES ('{$firstname}', '{$lastname}');");
        }
    }

    function database_deleteEmployee($firstname, $lastname) {
        global $connection;

        if($connection != null) {
            mysqli_query($connection, "DELETE FROM employees WHERE firstname = '{$firstname}'");

        }
    }
    
    function database_verifyUser($firstname, $lastname) {
        // Use the global connection
        global $connection;

        // Create a default value
        $status = false;

        if($connection != null) {
            $results = mysqli_query($connection, "SELECT lastname FROM employees WHERE firstname = '{$firstname}';");
            
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