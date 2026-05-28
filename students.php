<?php include 'db.php'; ?>

<h2>Add Student</h2>

<form method="POST">

<input type="text" name="name" placeholder="Student Name" required><br><br>

<input type="text" name="class" placeholder="Class" required><br><br>

<button type="submit" name="save">Add Student</button>

</form><?php

if(isset($_POST['save'])){

$name = $_POST['name'];
$class = $_POST['class'];

$sql = "INSERT INTO students(name, class)
VALUES('$name','$class')";

mysqli_query($conn, $sql);

echo "Student Added Successfully";

}

?><h2>Student List</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Class</th>
    <th>Action</th>
</tr>

<?php

$result = mysqli_query($conn, "SELECT * FROM students");

while($row = mysqli_fetch_assoc($result)){

?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['class']; ?></td>
    <td>
        <a href="delete_student.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>

<?php } ?>

</table><td>
    <a href="edit_student.php?id=<?php echo $row['id']; ?>">Edit</a>
    |
    <a href="delete_student.php?id=<?php echo $row['id']; ?>">Delete</a>
</td> 