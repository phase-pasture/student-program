<?php
// Student.php

class Student {
    private $studentId;
    private $firstName;
    private $lastName;
    private $birthDate;

    public function __construct($studentId, $firstName, $lastName, $birthDate) {
        $this->studentId = $studentId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
    }

    public function displayStudentInfo() {
        echo "Student ID: $this->studentId\n";
        echo "Name: $this->firstName $this->lastName\n";
        echo "Birthdate: $this->birthDate\n";
    }
}
?>
