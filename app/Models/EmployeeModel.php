<?php

class EmployeeModel {
    private $Name;
    private $Address;
    private $Salary;

    public function __construct($Name, $Address, $Salary  ) {
        $this->Name = $Name;
        $this->Address = $Address;
        $this->Salary = $Salary;
    }
    

    // Getter và Setter cho các thuộc tính
    public function getName() {
        return $this->Name;
    }

    public function setName($Name) {
        $this->Name = $Name;
    }

    public function getAddress() {
        return $this->Address;
    }

    public function setAddress($Address) {
        $this->Address = $Address;
    }

    public function getSalary() {
        return $this->Salary;
    }

    public function setSalary($Salary) {
        $this->Salary = $Salary;
    }
}
?>