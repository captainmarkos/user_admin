<?php

    // db properties
    $dbhost = 'localhost';
    $dbuser = 'dbuser';
    $dbpass = 'bgt56yhn';
    $dbname = 'bluewild';

    // Using Mysqli - make a connection to the mysql database here.
    $dbconn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if($dbconn->connect_errno) {
        echo 'ERROR: Failed to connect to MySQL: (';
        echo $dbconn->connect_errno . ') ' . $dbconn->connect_error;
        exit();
    }

    if(!$dbconn->set_charset("utf8")) {
        echo 'Error loading character set utf8: ' . $dbconn->error;
        exit();
    }

    session_start();

?>
