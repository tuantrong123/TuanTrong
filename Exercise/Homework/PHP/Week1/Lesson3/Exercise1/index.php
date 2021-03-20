<!DOCTYPE HTML>
<html>
<head>
    <title>Exercise 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<?php
$usename = $password = "";
$Errusename = $Errpasswork = $loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usename = test_input($_POST["usename"]);
    $password = test_input($_POST["password"]);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty ($_POST["usename"])) {
        $Errusename = "Usename name không được để trống";
    } else {
        $usename = test_input($_POST["usename"]);
    }
    if (empty ($_POST["password"])) {
        $Errpasswork = "Password không được để trống";
    } else {
        $password = test_input($_POST["password"]);
    }

    if ($_POST["usename"] == 'admin' && $_POST["password"] == 'admin') {
        echo "Nguyễn Tuấn Trọng";
    } else {
        $loginErr = "Đăng nhập thất bại";
    }

}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 border">
            <div><h5 class="text-center bg-success p-3 rounded-top">Sign in</h5></div>
            <br/>
            <form method="POST" action="index.php" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
                <input type="text" name="usename" placeholder="Usename"
                       class="form-control"><?php echo "<p class='text-danger'>$Errusename</p>"; ?>
                <br/>
                <input type="text" name="password" placeholder="Password"
                       class="form-control"><?php echo "<p class='text-danger'>$Errpasswork</p>"; ?>
                <?php echo "<p class='text-danger'>$loginErr</p>"; ?>
                <input class="btn btn-success form-control" type="submit" name="submit" value="Save Record">
        </div>
    </div>
</div>
								