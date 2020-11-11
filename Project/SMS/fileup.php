<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    background : url('school.jpg');
}
table{
    
}
.container {
  width: 1000px;
  clear: both;
}

.container input {
  width: 100%;
  clear: both;
}
a:hover{
	  background-color: burlywood !important;
  }
.add{
	  background-color:#d9534f;
	  color:white !important;
	  font-size:30px;
      text-align: center;
  }
.h1{
  text-align:center;
}
</body>
</style>
</head>
<body>

<div class="container">
<caption><h1><u><center>Student Details</center></u></h1></caption>
<?php
    include 'connection.php';
$sql = "SELECT `ID`, `Name`, `Fathers's Name`, `Mother's Name`, `Contact Number`, `Class`, `Semester` FROM `info`";
$result = mysqli_query($con , $sql);
if (mysqli_num_rows($result) > 0)
{
    echo "<table style='width:100%'  ;  >
    
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Father's Name</th>
    <th>Mother's name</th>
    <th>Contact No.</th>
    <th>Class</th>
    <th>Semester</th>
    <th>ACTION</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Fathers's Name"] . "</td>";
        echo "<td>" . $row["Mother's Name"] . "</td>";
        echo "<td>" . $row["Contact Number"] . "</td>";
        echo "<td>" . $row["Class"] . "</td>";
        echo "<td>" . $row["Semester"] . "</td>";
        ?> 
        <td><a href="up.php?id=<?php echo $row['ID'] ?>"  >Edit</a></td> <?php
        echo "</tr>";
    }
    echo "<br>";
    echo "</table>";
    echo "<br>";
}
?>

<div class="list-group">
    <a href="index.html" class="list-group-item add">Home</a><br>
</div>
</div>
</body>
</html>