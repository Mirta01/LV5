<?php
include "classes.php";

$con = new Configuration("127.0.0.1", "employees", "root", "");

try
{
    $Connection = new PDO("mysql:host=$con->host;dbname=$con->dbName", $con->username, $con->password);
}
catch(PDOException $e)
{
    die("Did not connect to ". $con->dbName." : ".$e->getMessage());
}

?>