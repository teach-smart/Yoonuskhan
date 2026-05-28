<?php include 'db.php'; ?>

<h2>Attendance Form</h2>

<form method="POST">

<input type="text" name="student_name" placeholder="Student Name" required>

<select name="status">
    <option>Present</option>
    <option>Absent</option>
</select>

<button type="submit" name="save">Save</button>

</form>

<?php
// SAVE DATA
if(isset($_POST['save'])){

    $name = $_POST['student_name'];
    $status = $_POST['status'];

    $sql = "INSERT INTO attendance(student_name, status)
            VALUES('$name', '$status')";

    mysqli_query($conn, $sql);

    echo "Saved Successfully";
}
?>

<h2>Attendance List</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Student Name</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php
// SHOW DATA
$result = mysqli_query($conn, "SELECT * FROM attendance");

if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($result)){
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['student_name']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td>
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>

<?php } ?>

</table>