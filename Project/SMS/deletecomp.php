<?php
$id = $_GET['id'];
include "connection.php";
$qry = "SELECT * FROM `info` WHERE `ID`= '$id'";
    $result = mysqli_query($con,$qry);
    $row = mysqli_fetch_assoc($result);
if(isset($_GET['id'])){  
    include "connection.php";      
            $sql = "DELETE FROM `info` WHERE `ID`= '$id'"; 
            $result = mysqli_query($con , $sql);
            if(! $result ) {
                die('Could not update data: ' );
             }
             ?>
             <script>
             alert("Data Deleted!");

            </script>
            <?php
            $id = $_SESSION['uid'] ;
			header('location:index.html');
            }
            
             ?>