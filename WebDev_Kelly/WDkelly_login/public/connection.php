<?php

    //credentials of the database that is hosted in the cloud
    $dbhost = 'sql2.freemysqlhosting.net';
    $dbuser = 'kelly';
    $dbpass = 'password';
    $dbname = 'databasename';

    //create a database connection
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // if it is not connecting to the database print: connection failed
    // check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
        exit();
                    }
?>