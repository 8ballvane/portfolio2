<?php
    include("database.php");

    function security_validate() {
        // Set a default value
        $status = false;
        
        // Validate
        if(isset($_POST["firstname"]) and isset($_POST["lastname"])) {
            $status = true;
        }

        return $status;
    }


    function security_addEmployee() {
        // Validate and sanitize.
        $result = security_sanitize();
        // Open connection.
        database_connect();

        // Use connection.
        //
        // We want to make sure we don't add
        //  duplicate values.
        if(!database_verifyUser($result["firstname"], $result["lastname"])) {
            // Add a new employee.
            database_addEmployee($result["firstname"], $result["lastname"]);
        }
        
        // Close connection.
        database_close();
    }

    function security_deleteEmployee() {
        $result = security_sanitize();
        database_connect();

        database_deleteEmployee($result["firstname"], $result["lastname"]);

        database_close();

    }

    function security_sanitize() {
        $result = [
            "firstname" => null,
            "lastname" => null
        ];

        if(security_validate()) {
            // After validation, sanitize text input.
            $result["firstname"] = htmlspecialchars($_POST["firstname"]);
            $result["lastname"] = htmlspecialchars($_POST["lastname"]);
        }

        // Return array
        return $result;
    }
?>