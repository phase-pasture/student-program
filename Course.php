<?php
// Course.php

class Course {
    private $courseId;
    private $courseName;
    private $enrolledStudents;

    public function __construct($courseId, $courseName) {
        $this->courseId = $courseId;
        $this->courseName = $courseName;
        $this->enrolledStudents = [];
    }

    public function enrollStudent($student) {
        $this->enrolledStudents[] = $student;
    }

    public function displayCourseInfo() {
        echo "Course ID: $this->courseId\n";
        echo "Course Name: $this->courseName\n";
        echo "Enrolled Students:\n";

        foreach ($this->enrolledStudents as $student) {
            $student->displayStudentInfo();
            echo "---------------------\n";
        }
    }
}
?>
