<?php
include('./includes/config.php'); 

if(isset($_POST['DEleteme'])=="DEleteme"){

    $id = $_POST['empid'];

    $sql = "DELETE FROM users WHERE emp_id='$id'";

    if ($conn->query($sql) === TRUE) {
      echo "Employee Details Has Been Deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();    
}


?>