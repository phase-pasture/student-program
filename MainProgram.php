<?php
// MainProgram.php

require_once 'Student.php';
require_once 'Course.php';

$student1 = new Student(1, 'John', 'Doe', '2000-05-15');
$student2 = new Student(2, 'Jane', 'Smith', '1999-08-22');

$course = new Course(101, 'Computer Science 101');
$course->enrollStudent($student1);
$course->enrollStudent($student2);

echo "Course Information:\n";
$course->displayCourseInfo();
?>
