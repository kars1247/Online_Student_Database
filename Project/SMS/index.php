
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <style>
                body{
                    background: url('school.jpg');
                }
                a{
                    color: black;
                    width: 800px;
                    text-align: center;
                    clear: both;
                    margin: 40px auto 60px;
                }
                report{
                    text-align: right;
                }
                </style>
<title>Student Management System</title>
</head>
<body>
<h3 align="right" style="margin-right:20px"><a href="login.php ">Admin Login</a></h3>
<form action="index.php" method="post">
<table style="width:30%" align="center" border="1">
<tr>
<td colspan="2" align="center">Student Information </td>
</tr>
<tr>
<td align="left"> Enter ID</td>
<td>
<input type="text" name="ID"/>
</td>
</tr>
<tr>
<td align="left">Enter name</td>
<td><input type="text" name="name"/></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Show Info"  />
</td>
</tr>
</table>
</form><br>
<a href="..\index.html" class="list-group-item display" >Exit</a><br>
<div class="k">
    <a href="report.html" class="list-group-item display" report >Report Problem</a>
</div>
<?php
if(isset($_POST['submit']))// check  that submit  button is clicked or not
{
$id = $_POST['ID'];// get the value of std variable using post method
$name = $_POST['name']; // get the value of rollno variable using post method
include('dbcon.php');
include('function.php');
showdetails($id,$name);
}
?>
</body>
</html>