<?php include 'db.php'; ?>

<h1>TeachSmart Dashboard</h1>

<a href="attendance.php">Attendance</a><br>
<a href="logout.php">Logout</a><?php include 'db.php'; ?>

<?php

$present = mysqli_query($conn, "SELECT COUNT(*) as p FROM attendance WHERE status='Present'");
$p = mysqli_fetch_assoc($present);

$absent = mysqli_query($conn, "SELECT COUNT(*) as a FROM attendance WHERE status='Absent'");
$a = mysqli_fetch_assoc($absent);

?><h2>Attendance Chart</h2>

<canvas id="myChart" width="400" height="200"></canvas><h2>Attendance Chart</h2>

<canvas id="myChart"></canvas><script src="https://cdn.jsdelivr.net/npm/chart.js"></script><script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Present', 'Absent'],
        datasets: [{
            data: [
                <?php echo $p['p']; ?>,
                <?php echo $a['a']; ?>
            ],
            backgroundColor: ['green', 'red']
        }]
    }
});
</script><script src="https://cdn.jsdelivr.net/npm/chart.js"></script><?php echo $p['p']; ?>
<?php echo $a['a']; ?><?php include 'db.php'; ?>

<?php
$present = mysqli_query($conn, "SELECT COUNT(*) as p FROM attendance WHERE status='Present'");
$p = mysqli_fetch_assoc($present);

$absent = mysqli_query($conn, "SELECT COUNT(*) as a FROM attendance WHERE status='Absent'");
$a = mysqli_fetch_assoc($absent);

$total = $p['p'] + $a['a'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>
body{
    margin:0;
    font-family:Arial;
    background:#f0f2f5;
}

.header{
    background:#1e3a8a;
    color:white;
    padding:20px;
    text-align:center;
    font-size:24px;
}

.container{
    display:flex;
    justify-content:center;
    gap:20px;
    margin-top:30px;
    flex-wrap:wrap;
}

.card{
    background:white;
    padding:20px;
    width:200px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.2);
    text-align:center;
}

.card h2{
    color:#1e3a8a;
}

.big{
    font-size:30px;
    font-weight:bold;
    color:#2563eb;
}

.menu{
    text-align:center;
    margin-top:20px;
}

a{
    text-decoration:none;
    background:#2563eb;
    color:white;
    padding:10px 15px;
    border-radius:5px;
    margin:5px;
    display:inline-block;
}
</style>

</head>

<body>

<div class="header">
    TeachSmart Dashboard
</div>

<div class="menu">
    <a href="attendance.php">Attendance</a>
    <a href="logout.php">Logout</a>
</div>

<div class="container">

    <div class="card">
        <h2>Total</h2>
        <div class="big"><?php echo $total; ?></div>
    </div>

    <div class="card">
        <h2>Present</h2>
        <div class="big"><?php echo $p['p']; ?></div>
    </div>

    <div class="card">
        <h2>Absent</h2>
        <div class="big"><?php echo $a['a']; ?></div>
    </div>

</div>

<h2 style="text-align:center;margin-top:40px;">Attendance Chart</h2>

<div style="width:400px;margin:auto;">
<canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Present', 'Absent'],
        datasets: [{
            data: [<?php echo $p['p']; ?>, <?php echo $a['a']; ?>],
            backgroundColor: ['green', 'red']
        }]
    }
});
</script>

</body>
</html>