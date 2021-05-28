<?php
include "db_connect.php";
$new_student = $_GET["NewID"];
$new_name = $_GET["NewName"];
$new_dept = $_GET["NewDept"];
$new_grade = $_GET["NewGrade"];
echo"<h2>Trying to add new data for $new_student</h2>";
$sql = "insert into Student_Database (Student_ID, Name, Department, Grade) values('$new_student','$new_name','$new_dept','$new_grade')";
$result = $mysqli->query($sql);
include "search_student.php";
?>
<a href="index.php">Return to main page</a>