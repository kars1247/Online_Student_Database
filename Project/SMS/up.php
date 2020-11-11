<?php
$id = $_GET['id'];
include "connection.php";
$qry = "SELECT * FROM `info` WHERE `ID`= '$id'";
    $result = mysqli_query($con,$qry);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
</head>
<style>
    body{
        background: url("https://previews.123rf.com/images/phokin/phokin1703/phokin170300075/75165009-ideas-about-wood-planks-brown-texture-background-wood-all-antique-cracking-furniture-painted-weather.jpg");
        align: center;
        }
</style>
<body>
    <h1> <center>Update Details</h1>
<form method="post" action="update.php">
               <center> <input type="hidden" name="id" value="<?php echo $row['ID'] ?>" />
                <h3>Name: <input type="text" name="name" placeholder="Enter the Name"/></h3>
                <h3>Father's Name: <input type="text" name="fname" placeholder="Enter the Father's Name"/ required></h3>
                <h3>Mother's Name: <input type="text" name="mname" placeholder="Enter the Mother's Name"/ required></h3>
                <h3>Contact: <input type="text" name="mob" placeholder="Enter the Mobile Number"/ required></h3>
                <h3>Class: <input type="text" name="class" placeholder="Enter the Class"/ required></h3>
                <h3>Semester: <input type="text" name="sem" placeholder="Enter the Semester"/ required></h3>
                <input type="submit" value="submit" name="submit"/></center>
                </form>
</body>
</html>
