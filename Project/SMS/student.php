session_start();
<?php
if(isset($_POST['submit'])){
    include "connection.php";
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $mob = $_POST['mob'];
    $class = $_POST['class'];
    $semester = $_POST['sem'];
    $qry = "INSERT INTO `info`(`Name`, `Fathers's Name`, `Mother's Name`, `Contact Number`, `Class`, `Semester`) VALUES ('$name','$fname','$mname','$mob','$class','$semester')";
    $result = mysqli_query($con,$qry);
    if($result == true)
    {
        ?>
        <script>
            alert("Data Saved");
            </script>
        <?php
                header('location: display.php');
    }
    
}
?>