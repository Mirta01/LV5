<?php
include "./connection.php";
ini_set('memory_limit', '2048M');

$sQuery = "SELECT * FROM employees LIMIT 15;";
$oRecord = $Connection->query($sQuery);

while($oRow = $oRecord->fetch(PDO::FETCH_BOTH) )
{
    echo $oRow['emp_no']." ".$oRow['birth_date']." ".$oRow['first_name']." ".$oRow['last_name']." ".$oRow['gender']." ".$oRow['hire_date'] ;
}
echo "</br>";

?>