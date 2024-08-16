<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Password Checker</title>
</head>
<body>
    <h1>Simple Password Checker</h1>
    <form method="post" action="">
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required><br><br>
        
        <label for="string">String:</label>
        <input type="text" id="string" name="string" required><br><br>
        
        <input type="submit" value="Check">
    </form>

    <?php
    function isValidPassword($password) {
        if (strlen($password) < 6) {
            return false;
        }
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }
        if (!preg_match('/[a-z]/', $password)) {
            return false;
        }
        if (!preg_match('/[0-9]/', $password)) {
            return false;
        }
        return true;
    }

    function findShortestValidSubstring($s) {
        $n = strlen($s);
        $minLength = PHP_INT_MAX;
        $result = "";

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i; $j < $n; $j++) {
                $substring = substr($s, $i, $j - $i + 1);
                if (isValidPassword($substring) && strlen($substring) < $minLength) {
                    $minLength = strlen($substring);
                    $result = $substring;
                }
            }
        }

        return $result;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST['password'];
        $string = $_POST['string'];

        // Kiểm tra mật khẩu
        if (isValidPassword($password)) {
            echo "Mật khẩu hợp lệ.<br>";
        } else {
            echo "Mật khẩu không hợp lệ.<br>";
        }

        // Tìm xâu con liên tiếp ngắn nhất thỏa mãn yêu cầu
        $shortestValidSubstring = findShortestValidSubstring($string);
        if ($shortestValidSubstring !== "") {
            echo "Xâu con liên tiếp ngắn nhất thỏa mãn yêu cầu: $shortestValidSubstring<br>";
        } else {
            echo "Không có xâu con nào thỏa mãn yêu cầu.<br>";
        }
    }
    ?>
</body>
</html>