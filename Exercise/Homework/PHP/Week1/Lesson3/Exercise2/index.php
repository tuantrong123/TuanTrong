<!DOCTYPE HTML>
<html>
<head>
    <title>Exercise 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<?php
$fname = $lname = $email = $gender = $checkbox = "";
$fnameArr = $lnameArr = $emailArr = $checkArr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty ($_POST["fname"])) {
        $fnameArr = "First name không được để trống";
    } else {
        $fname = test_input($_POST["fname"]);
    }
    if (empty ($_POST["lname"])) {
        $lnameArr = "Last name không được để trống";
    } else {
        $lname = test_input($_POST["lname"]);
    }
    if (empty ($_POST["email"])) {
        $emailArr = "E-mail không được để trống";
    } else {
        $email = test_input($_POST["email"]);
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
    <div class="row mt-5">
        <div class="col-12 col-md-8 col-lg-8">
            <div class="form border rounded pl-3 pr-3 mb-4">
                <h5>Registration Form</h5>
            <br/>
            <form method="POST" action="index.php" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
                First Name <br><input type="text" name="fname"
                                      class="form-control"><?php echo "<p class='text-danger'>$fnameArr</p>"; ?>
                <br/>
                Last Name<br/><input type="text" name="lname"
                                     class="form-control"><?php echo "<p class='text-danger'>$lnameArr</p>"; ?>
                <br/>
                E-mail<br/><input type="text" name="email"
                                  class="form-control"><?php echo "<p class='text-danger'>$emailArr</p>"; ?>
                <br/>
                Gender
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Male">Male
                <br/><br/>
                State<br/>
                <select name="state" class="form-control">
                    <option value="1">Johor</option>
                    <option value="2">Massachusetts</option>
                    <option value="3"> Washington</option>
                </select><br/>
                Hobbies<br/>
                <input type="checkbox" name="cat[]" value="1" id="cat_1">
                <label for="">Badminton</label>
                <input type="checkbox" name="cat[]" value="2" id="cat_2">
                <label for="cat_2">Football</label>
                <input type="checkbox" name="cat[]" value="3" id="cat_3">
                <label for="cat_3">Bicycle</label><br/>
                <input class="btn btn-primary" type="submit" name="submit" value="Save Record">
                <input class="btn btn-light" type="reset" name="reset" value="Reset">
				</div>
            </form>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <div class="container border rounded">
                <h5>Featured</h5>
                <h5>Spetured title treatment</h5>
                <p>With supporting text below as a natural<br/> lead-in to additionnal content</p>
                <input class="btn btn-primary" type="submit" name="somewhere" value="Go somewhere">
            </div>
        </div>
    </div>
</div>
<br/>
<?php
if (isset($_POST['submit'])) {
    echo "<h2>Thông tin của bạn:</h2>";
    echo "First name: " . $fname . "<br>";
    echo "Last name: " . $lname . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "State: ";
    $dropdow = $_POST['state'];
    if ($dropdow == 1) {
        echo 'Johor';
    } else if ($dropdow == 2) {
        echo 'Massachusetts';
    } else {
        echo 'Washington';
    }
    echo "<br>";
    echo "Hobbies: " . $checkbox;
    $checkboxArr = $_POST['cat'];
    foreach ($checkboxArr as $value) {
        if ($value == 1) {
            echo 'Badminton. ';
        } else if ($value == 2) {
            echo 'Football. ';
        } else {
            echo 'Bicycle';
        }
    }
}
?>
</body>
</html>