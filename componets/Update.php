<b class="text-primmary" id="UpdaterEsp"></b>
<form class="" method="POST" action="Update.php" id="UpdateEmployeeForm">
<?php 
include('./includes/config.php'); 
if(isset($_POST['Updateme'])=="Updateme"){
    $id = $_POST['empid'];

$sql = "SELECT * FROM users WHERE emp_id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
  <div class="mb-3">
    <label for="uempnamer" class="form-label">Employee Name</label>
    <input type="text" class="form-control" id="uempnamer"  name="uempnamer" value="<?php echo $row["emp_name"]; ?>">
  </div>
  <div class="mb-3">
    <label for="udepartment" class="form-label">Department</label>

    <select class="form-select" aria-label="Default select example" id="udepartment" name="udepartment">
  <option value="">Select Your Department</option>
  <option <?php if ($row['department']=='Computer'){ echo "selected";}?> value="Computer">Computer</option>
  <option <?php if ($row['department']=='Biology'){ echo "selected";}?> value="Biology">Biology</option>
  <option <?php if ($row['department']=='Commerce'){ echo "selected";}?> value="Commerce">Commerce</option>
  
</select>
  </div>

  <input type="hidden" class="form-control" name="uemp_ud" id="uemp_ud" value="<?php echo $row["emp_id"]; ?>">
  <button type="button" name="update" id="Updateuser" class="btn btn-primary Updateuser" value="value">Update</button>
<?php
  }
} else {
  echo "0 results";
}
}
$conn->close();

?>
</form>

<script>
        $('.Updateuser').on('click',function(event){
        event.preventDefault();
        var empnamer = $('#uempnamer').val();
        var department = $('#udepartment').val();
        var emp_ud = $('#uemp_ud').val();
        var updateSubmituser ="updateSubmituser";
        $.ajax({
            type: 'POST',
            url: "../componets/Updateinsert.php",
            data: {empnamer:empnamer,department:department,emp_ud:emp_ud,Submituser:updateSubmituser},
            success: function(response) {
                $('#UpdaterEsp').text(response);
                $('#UpdaterEsp').show();
            setTimeout(function(){ $('#UpdaterEsp').hide(); $('#UpdateEmployee').modal('hide');},2000)
            $("form")[0].reset();
            FetchDeatils();
            },
            error:function(err){
                $('#UpdaterEsp').text(err);
            }
        });
    })
</script>