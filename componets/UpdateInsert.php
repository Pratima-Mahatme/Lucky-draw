
<?php include('./includes/config.php'); 

if(isset($_POST['Submituser'])=="updateSubmituser"){
    $empnamer =  $_POST['empnamer'];
    $department =  $_POST['department'];
    $emp_ud =  $_POST['emp_ud'];
    if($empnamer !="" && $department !="") {
        
$sql = "UPDATE users SET emp_name='$empnamer',emp_id='$emp_ud', department='$department' WHERE emp_id='$emp_ud'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
    }else{
   echo 'Please Enter All Fields';
 }



}




?>