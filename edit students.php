<?php include 'db.php'; ?>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

?><h2>Edit Student</h2>

<form method="POST">

<input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>

<input type="text" name="class" value="<?php echo $row['class']; ?>" required><br><br>

<button type="submit" name="update">Update</button>

</form><?php

if(isset($_POST['update'])){

$name = $_POST['name'];
$class = $_POST['class'];

mysqli_query($conn, "UPDATE students SET 
name='$name',
class='$class'
WHERE id=$id");

header("Location: students.php");

}

?>