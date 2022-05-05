<?php
include "connection.php";
header('Content-type: text/json');
header('Content-type: application/json; charset=utf-8');


if (isset($_GET["json_id"]))
{
    $stat = $_GET["json_id"];

    switch ($stat)
    {
        case 'get_all_employees':
            $sQuery = "SELECT * FROM employees LIMIT 25;";
            $oRecord = $Connection->query($sQuery);
            $aEmployees = array();
            
            while($oRow = $oRecord->fetch(PDO::FETCH_BOTH))
            {
                $oEmployee = new Employee($oRow['emp_no'],$oRow['birth_date'],$oRow['first_name'],$oRow['last_name'],$oRow['gender'],$oRow['hire_date']);
                array_push($aEmployees, $oEmployee);
            }
            echo json_encode($aEmployees);
            break;
        case 'get_all_departments':
            $sQuery = "SELECT * FROM departments LIMIT 15;";
            $oRecord = $Connection->query($sQuery);

            while($oRow = $oRecord->fetch(PDO::FETCH_BOTH) )
            {
                echo json_encode($oRow);
            }

            break;
        case 'get_employee_by_id':
            $sQuery = "SELECT * FROM employees WHERE emp_no=". $_GET['employee_id'];;
            $oRecord = $Connection->query($sQuery);
            $foundEmployee = array();

            while($oRow = $oRecord->fetch(PDO::FETCH_BOTH) )
            {
                $oEmployee = new Employee($oRow["emp_no"], $oRow["birth_date"], $oRow["first_name"], $oRow["last_name"], $oRow["gender"], $oRow["hire_date"]);
                array_push($foundEmployee, $oEmployee);
            }
            echo json_encode($foundEmployee);

            break;
        default:

            break;
    }
}
else
{
    echo "Fail";
}

?>