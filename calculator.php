<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php
  if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
      case "ADDITION":
        $sum = $num1 + $num2;
        echo "ADDITION :", $sum;
        break;
      case "SUBTRACTION":
        $sub = $num1 - $num2;
        echo "SUBTRACTION :", $sub;
        break;
      case "MULTIPLICATION":
        $mul = $num1 * $num2;
        echo "MULTIPLICATION :", $mul;
        break;
      case "DIVISION":
        $div = $num1 / $num2;
        echo "DIVISION :", $div;
        break;
      default:
        echo "Invalid option";
    }
  }
  ?>
</body>

</html>
