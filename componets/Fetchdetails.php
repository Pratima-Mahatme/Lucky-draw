<h3>Employee Details</h3>
<div class="table-responsive py-3">
<table class="table table-striped">
<thead>
<tr>
<th>Serial&nbsp;No.</th>
<th>Employee&nbsp;Name</th>
<th>Department</th>
<th>Employee&nbsp;Id</th>
<th>Actions</th>
</tr>
  </thead>
  <tbody>




    <?php 

include('./includes/config.php'); 

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "  <tr>
    <td>".$row["id"]."</td>
<td>".$row["emp_name"]."</td>
<td>".$row["department"]."</td>
<td>".$row["emp_id"]."</td>
<td><button type='button' class='btn btn-sm btn-danger Deleteme' onClick=".'mydelefunct('.$row["emp_id"].');'." id=".$row["emp_id"].">Delete</button>&nbsp;<button type='button' data-bs-toggle='modal' data-bs-target='#UpdateEmployee' onClick=".'myUpdatefunct('.$row["emp_id"].');'." class='btn btn-sm btn-warning updateme' id=".$row["emp_id"].">Update</button></td>
    </tr>
";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
  </tbody>
</table>
</div>