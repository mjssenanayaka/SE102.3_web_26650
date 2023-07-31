
<html>
<head>
    <title>Electricity Bill Calculation</title>
</head>
<body>
    <form method="post">
        <label for="units">Enter the number of units consumed:</label>
        <input type="text" id="units" name="units">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $units = $_POST["units"];
        $totalBill = 0;

        if ($units <= 50) {
            $totalBill = $units * 3.50;
        } elseif ($units <= 100) {
            $totalBill = 50 * 3.50 + ($units - 50) * 4.00;
        } elseif ($units <= 150) {
            $totalBill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
        } else {
            $totalBill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
        }

        echo "Total electricity bill: Rs. " . number_format($totalBill, 2);
    }
    ?>
</body>
</html>