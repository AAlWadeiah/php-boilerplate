<?php

$host = "db";
$db_name = "my_local_db";
$username = "admin";
$password = "admin";

try {
    $dbh = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    echo '<h4 style="color: green">Connected to database sucessfully.</h4>';
}
catch (PDOException $e) {
    echo $e;
    echo '<h4 style="color: red">Fail to connect to database.</h4>';
}