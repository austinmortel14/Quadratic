<?php
if (isset($_POST['Submit'])) {
  
    $al = $_POST["al"];
    $bl = $_POST["bl"];
    $cl = $_POST["cl"];

    $discriminant = $bl * $bl - 4 * $al * $cl;

    if ($discriminant >= 0) {
 
        $root1 = (-$bl + sqrt($discriminant)) / (2 * $al);
        $root2 = (-$bl - sqrt($discriminant)) / (2 * $al);
        echo "Roots: x1 = $root1, x2 = $root2";
    } else {
   
        $realPart = -$bl / (2 * $al);
        $imagPart = sqrt(abs($discriminant)) / (2 * $al);
        echo "Roots: x1 = $realPart + $imagPart i, x2 = $realPart - $imagPart i";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Equation Solver</title>
</head>
<body>
    <h1>Discriminant of a Quadratic Equation</h1>
    <form method="post">
        <input type="text" name="al" id="" value="" placeholder="Enter A value">
        <input type="text" name="bl" id="" value="" placeholder="Enter B value">
        <input type="text" name="cl" id="" value="" placeholder="Enter C value">
        <input type="submit" name="Submit" value="Calculate">
    </form>
</body>
</html>
