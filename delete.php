<?php

include 'db.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM attendance WHERE id=$id");

header("Location: attendance.php");

?>