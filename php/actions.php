<?php
include "connection.php";

if(isset($_POST['choice'])){
switch ($_POST['choice']) {
    case "NewEmployee":{
        $sQuery = "INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date) SELECT MAX(emp_no) + 1, '".$_POST['birth_date']."', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['gender']."', '".$_POST['hire_date']."' FROM employees;";
        $oStatement = $Connection->query($sQuery);
        break;
    }
    case "UpdateEmployee":{
        $sQuery ="UPDATE employees SET first_name='".$_POST['name']."', last_name='".$_POST['lastName']."', birth_date='".$_POST['birth']."', gender='".$_POST['gender']."' WHERE emp_no=".$_POST['id'];
        $oStatement = $Connection->query($sQuery);
        break;
    }
    case "DeleteEmployee":{
        $sQuery="DELETE FROM employees WHERE emp_no=".$_POST['id'];
        $oStatement = $Connection->query($sQuery);
        break;
    }
    case "NewDepartmente":{
        $sQuery = "INSERT INTO departments (dept_no, dept_name) VALUES ('".$_POST['id']."', '".$_POST['name']."');";
        $oStatement = $Connection->query($sQuery);
        break;
    }
    case "UpdateDepartmente":{
        $sQuery ="UPDATE departments SET dept_name='".$_POST['name']."' WHERE dept_no='".$_POST['id']."';";
        $oStatement = $Connection->query($sQuery);
        break;
    }
    case "DeleteDepartmente":{
        $sQuery='DELETE FROM departments WHERE dept_no="'.$_POST['id'].'";';
        $oStatement = $Connection->query($sQuery);
        break;
    }  
    default:
        echo "wrong 'choice'";
        break;
}
}else{
    $statement="";
    echo "choice is not set";
}

?>