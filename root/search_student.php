<?php
echo $mysqli->host_info . "\n";
        
$sql = "SELECT Student_ID, Name, Department, Grade FROM Student_Database";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
        echo "Student_ID: " . $row["Student_ID"]. "     Name: " . $row["Name"]. "   Department: " . $row["Department"]."    Grade: " . $row["Grade"]."<br>";
    }
}
else {
    echo "0 results";
}
?>
        