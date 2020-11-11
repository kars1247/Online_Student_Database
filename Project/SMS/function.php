<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: colllapse;
}
th, td {
  padding: 5px;
  color: black;
}
th {
  text-align: center;
  color: pink;
  background-color: black;
}
table{
  background: url("https://previews.123rf.com/images/phokin/phokin1703/phokin170300075/75165009-ideas-about-wood-planks-brown-texture-background-wood-all-antique-cracking-furniture-painted-weather.jpg");
}
body {
    background : url('school.png');
}
</body>
</style>
</head>
<body>
</body>
<?php
function showdetails($id,$name)	
{
	include('dbcon.php');
	$sql = "SELECT `ID`, `Name`, `Fathers's Name`, `Mother's Name`, `Contact Number`, `Class`, `Semester` FROM `info` WHERE `ID`='$id' AND `Name`='$name'";
	$run = mysqli_query($con,$sql);
	if (mysqli_num_rows($run) > 0)
{
    echo "<table style='width:100%';  >
    <caption text-align: center ><h1><u>Student Details</u></h1></caption>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Father's Name</th>
    <th>Mother's name</th>
    <th>Contact No.</th>
    <th>Class</th>
    <th>Semester</th>
    </tr>";
    while($row = mysqli_fetch_assoc($run))
    {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Fathers's Name"] . "</td>";
        echo "<td>" . $row["Mother's Name"] . "</td>";
        echo "<td>" . $row["Contact Number"] . "</td>";
        echo "<td>" . $row["Class"] . "</td>";
        echo "<td>" . $row["Semester"] . "</td>";
        echo "</tr>";
    }
    echo "<br>";
    echo "</table>";
}
	else
	{
		echo "<script>window.alert('No record Found');</script>";// alert box showing message
	}

}

?>
</html>