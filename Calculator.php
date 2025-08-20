<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'] ?? null;
    $num2 = $_POST['num2'] ?? null;
    $op   = $_POST['op'] ?? null;

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($op) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                $result = ($num2 != 0) ? $num1 / $num2 : "Error (Divide by 0)";
                break;
            default:
                $result = "Select a valid operation.";
        }
    } else {
        $result = "Please enter valid numbers.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Simple Calculator</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #88A78B;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .calc {
        background: #FAF3E0;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        text-align: center;
    }
    input, select, button {
        padding: 10px;
        margin: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
    }
    button {
        background: #A67B5B;
        color: white;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background:rgb(182, 145, 117);
    }
</style>
</head>
<body>
<div class="calc">
    <h2>Simple Calculator</h2>
    <form method="post">
        <input type="text" name="num1" placeholder="First Number" required>
        <select name="op" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">×</option>
            <option value="/">÷</option>
        </select>
        <input type="text" name="num2" placeholder="Second Number" required>
        <br>
        <button type="submit">Calculate</button>
    </form>
    <h3>Result: <?php echo $result; ?></h3>
</div>
</body>
</html>
