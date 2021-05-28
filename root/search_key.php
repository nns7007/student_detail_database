<head><link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script></head>
<?php
include "db_connect.php";
$keyfromform = $_GET["Keyword"];
echo"<h2>Show all the student within the Department $keyfromform</h2>";
$sql = "SELECT Student_ID, Name, Department, Grade FROM Student_Database where Department like '%" . $keyfromform . "%' ";
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