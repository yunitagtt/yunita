<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <label for="num1">Angka Pertama:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        
        <label for="num2">Angka Kedua:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        
        <label for="operation">Operasi:</label>
        <select id="operation" name="operation">
            <option value="add">Penjumlahan (+)</option>
            <option value="subtract">Pengurangan (-)</option>
            <option value="multiply">Perkalian (*)</option>
            <option value="divide">Pembagian (/)</option>
        </select>
        <br><br>
        
        <button type="submit" name="calculate">Hitung</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Tidak dapat membagi dengan nol";
                }
                break;
            default:
                $result = "Operasi tidak valid";
        }
        echo "<h3>Hasil: $result</h3>";
    }
    ?>
</body>
</html>