<?php
include ('class_lib.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Hệ số a:
    <input type="text" name="hs_a">
    <br><br>
    Hệ số b:
    <input type="text" name="hs_b">
    <br><br>
    Hệ số c:
    <input type="text" name="hs_c">
    <br><br>
    <button>Calculator</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $a = $_POST['hs_a'];
    $b = $_POST['hs_b'];
    $c = $_POST['hs_c'];
}
    $quadratic = new Quadratic($a,$b,$c);
    if ($quadratic->a ==0){
        echo "Error: Không phải là phương trình bậc 2";
    } else {
        if ($quadratic->a !== 0) {
            if ($quadratic->getDelta() < 0) {
                echo "Phương trình vô nghiệm";
            }
            if ($quadratic->getDelta() == 0) {
                echo "Phương trình có nghiệm kép: x1 = x2 =  " . (-$quadratic->get_b()) / (2 * $quadratic->get_a());
            }
            if ($quadratic->getDelta() > 0) {
                echo "Phương trình có 2 nghiệm phân biệt là: x1 = " . $quadratic->getRoot1() . " và x2 = " . $quadratic->getRoot2();
            }
        }
    }
?>
</body>
</html>
