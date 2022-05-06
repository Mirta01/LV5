<?php

class Configuration{
    public $host = "";
    public $dbName = "";
    public $username = "";
    public $password = "";

    public function __construct($host, $dbName, $username, $password) 
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;
    }
}

class Employee{
    public $emp_no = 0;
    public $birth_date = "";
    public $first_name = "";
    public $last_name = "";
    public $gender = "";
    public $hire_date = "";

    public function __construct($emp_no, $birth_date, $first_name, $last_name, $gender, $hire_date) 
    {
        $this->emp_no = $emp_no;
        $this->birth_date = $birth_date;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->hire_date = $hire_date;
    }
}

class Department{
    public $dept_no = 0;
    public $dept_name = "";

    public function __construct($dept_no, $dept_name) 
    {
        $this->dept_no = $dept_no;
        $this->dept_name = $dept_name;
    }
}

?>