<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="">
        <label for="number1">Number 1:</label>
        <input type="text" id="number1" name="number1" required><br><br>
        
        <label for="operation">Operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select><br><br>
        
        <label for="number2">Number 2:</label>
        <input type="text" id="number2" name="number2" required><br><br>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['number1'];
        $operation = $_POST['operation'];
        $number2 = $_POST['number2'];
        $result = null;
        $error = null;

        try {
            if (!is_numeric($number1) || !is_numeric($number2)) {
                throw new Exception("Both inputs must be numeric.");
            }

            $number1 = floatval($number1);
            $number2 = floatval($number2);

            switch ($operation) {
                case 'add':
                    $result = $number1 + $number2;
                    break;
                case 'subtract':
                    $result = $number1 - $number2;
                    break;
                case 'multiply':
                    $result = $number1 * $number2;
                    break;
                case 'divide':
                    if ($number2 == 0) {
                        throw new Exception("Division by zero is not allowed.");
                    }
                    $result = $number1 / $number2;
                    break;
                default:
                    throw new Exception("Invalid operation.");
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
        } finally {
            if ($error) {
                echo "<p>Error: $error</p>";
            } else {
                echo "<p>Result: $result</p>";
            }
        }
    }
    ?>
</body>
</html>