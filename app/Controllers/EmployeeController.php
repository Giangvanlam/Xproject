<?php
require_once('../app/Services/EmployeeService.php');
require_once('../app/Models/EmployeeModel.php');

class EmployeeController {
    public function index(){

        // Lay du lieu can tu service tuong ung
        $employeeService = new EmployeeService();
        $employees = $employeeService->getAllEmployee();
       

       // Render ra view
       include("../app/Views/index.php");
    } 
    
}