<?php
require_once('../app/Configs/DBConnection.php');
require_once('../app/Models/EmployeeModel.php');
class  EmployeeService{
    public function getAllEmployee()
    {
        $dbConn = new DBConnection(); 
        $conn = $dbConn->getConnection(); 
        $sql = "SELECT * FROM employees";
        $stmt = $conn->query($sql);

        $employees = [];

        while ($row = $stmt->fetch()) {
            $employee = new EmployeeModel($row['Name'], $row['Address'],$row['Salary'] );
            array_push($employees, $employee);
        }

        return $employees;
    }
    
}