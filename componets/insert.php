
<?php include('./includes/config.php'); 

if(isset($_POST['Submituser'])=="Submituser"){
    $empnamer =  $_POST['empnamer'];
    $department =  $_POST['department'];
    $emp_ud =  $_POST['emp_ud'];
    if($empnamer !="" && $department !="") {
        $sql = "INSERT INTO users (emp_name, emp_id, department) VALUES ('$empnamer', '$emp_ud', '$department')";
        if(mysqli_query($conn, $sql)){
            echo "Employee Details Has Been Submitted";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
    }else{
   echo 'Please Enter All Fields';
    }



}




?>