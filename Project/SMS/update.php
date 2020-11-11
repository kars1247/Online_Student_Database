
<?php
if(isset($_POST['submit'])){  
    include "connection.php";
    $id= $_POST['id'];  
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $mob = $_POST['mob'];
    $class = $_POST['class'];
    $semester = $_POST['sem'];    
            $sql = "UPDATE `info` SET  `ID`='$id', `Name`='$name',`Fathers's Name`='$fname',`Mother's Name`='$mname',`Contact Number`='$mob',`Class`='$class',`Semester`='$semester' WHERE `ID`= '$id' ";
            $result = mysqli_query($con , $sql);
            if(! $result ) {
                die('Could not update data: ' );
             }
             ?>
             <script>
             alert("Data Updated!");
            </script>
            <?php
            }
 
             ?>
             //CICAgKDq1PuIMw