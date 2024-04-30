<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 0;
    if ($quantity > 0) {
        echo "<h2>Generated Numbers:</h2>";
        for ($i = 0; $i < $quantity; $i++) {
            $number = generateNumber();
            echo $number . "<br>";
        }
    } else {
        echo "Invalid quantity.";
    }
} else {
    echo "Invalid request.";
}

function generateNumber() {
    $prefix = "9";
    $randomDigits = mt_rand(100000000, 999999999);
    return $prefix . $randomDigits;
}
?>
