<?php

require_once ('db_connect.php');

function db_connect(){
    $connection = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
    confirm_db_connect();
    return $connection;
}

function db_disconnect(){
    if(isset($connection)) {
        mysqli_close($connection);
    }
}

function db_escape($connection, $string) {
    return mysqli_real_escape_string($connection, $string);
}

function confirm_db_connect() {
    if(mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}

function confirm_result_set($result_set) {
    if (!$result_set) {
        exit("Database query failed.");
    }
}
