
        <h3 >Employee Deatils Submit &emsp; <span class="text-primary" id="submitresponse"></span></h3>
        
        
        <div class="col-sm-12 ">
        <form class="" method="POST" action="insert.php" id="EmployeeForm">
  <div class="mb-3">
    <label for="empnamer" class="form-label">Employee Name</label>
    <input type="text" class="form-control" id="empnamer"  name="empnamer">
  </div>
  <div class="mb-3">
    <label for="department" class="form-label">Department</label>

    <select class="form-select" aria-label="Default select example" id="department" name="department">
  <option value="">Select Your Department</option>
  <option value="Computer">Computer</option>
  <option value="Biology">Biology</option>
  <option value="Commerce">Commerce</option>
</select>
  </div>

  <input type="hidden" class="form-control" name="emp_ud" id="emp_ud" value="<?php echo rand(0,1000000000000000); ?>">

  <button type="submit" name="submit" id="adduser" class="btn btn-primary" value="value">Submit</button>
</form>
        </div>
    