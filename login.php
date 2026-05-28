<?php include 'db.php'; ?>

<h2>Teacher Login</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<button type="submit" name="login">Login</button>

</form>

<?php

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' 
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        header("Location: dashboard.php");
        exit();

    } else {
        echo "Invalid Login";
    }
}

?><?php include 'db.php'; ?>





?><div class="box">

    <h1>Smart Teaching Practice & Classroom Management System</h1>

    <p>Manage lesson plans, attendance and classroom activities easily.</p>

    

</div><?php include 'db.php'; ?>

<!

<?php

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' 
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid Login";
    }

}

?>


</form>

<?php
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' 
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid Login";
    }
}
?>


<?php

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' 
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid Login";
    }
}

?>

<?php
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' 
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid Login";
    }
}
?>

</body>
</html>