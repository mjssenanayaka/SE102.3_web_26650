
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>
    <form method="post">
        <label for="dayNumber">Enter a number (1 to 7):</label>
        <input type="text" id="dayNumber" name="dayNumber">
        <input type="submit" value="Show Day">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dayNumber = intval($_POST["dayNumber"]);

        switch ($dayNumber) {
            case 1:
                echo "Day of the week: Monday";
                break;
            case 2:
                echo "Day of the week: Tuesday";
                break;
            case 3:
                echo "Day of the week: Wednesday";
                break;
            case 4:
                echo "Day of the week: Thursday";
                break;
            case 5:
                echo "Day of the week: Friday";
                break;
            case 6:
                echo "Day of the week: Saturday";
                break;
            case 7:
                echo "Day of the week: Sunday";
                break;
            default:
                echo "Invalid number. Please enter a number between 1 and 7.";
        }
    }
    ?>
</body>
</html>