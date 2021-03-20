<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercise 5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="form">
        <form action="index.php" method="post">
            <div class="form-group">
                <label>Nhập số a</label>
                <input type="number" class="form-control" name="a" required>
            </div>
            <div class="form-group">
                <label>Nhập số b</label>
                <input type="number" class="form-control" name="b" required>
            </div>
            <button type="submit" name="btn" value="a+b" class="btn btn-success">a + b</button>
            <button type="submit" name="btn" value="a-b" class="btn btn-warning">a - b</button>
            <button type="submit" name="btn" value="a*b" class="btn btn-primary">a * b</button>
            <button type="submit" name="btn" value="a/b" class="btn btn-danger">a / b</button>
        </form>
    </div>
    <?php
    $number1 = $_POST['a'];
    $number2 = $_POST['b'];
    if ($_POST['btn'] == 'a+b') {
        echo "a + b = " . $number1 + $number2;
    }
    if ($_POST['btn'] == 'a-b') {
        echo "a - b = " . $number1 - $number2;
    }
    if ($_POST['btn'] == 'a*b') {
        echo "a * b = " . $number1 * $number2;
    }
    if ($_POST['btn'] == 'a/b') {
        echo "a / b = " . $number1 / $number2;
    }

    ?>
</div>
</body>
</html>