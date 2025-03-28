<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vykreslování obrazců</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Vykreslování obrazců</h1>
    <p>Zadejte velikost obrazce a vyberte typ:</p>

    <form method="POST" action="index.php">
        <label for="size">Velikost (n):</label>
        <input type="number" id="size" name="size" min="3" required>

        <label for="shape">Vyberte obrazec:</label>
        <select id="shape" name="shape">
            <option value="square">Čtverec</option>
            <option value="letterT">Písmeno T</option>
            <option value="letterE">Písmeno E</option>
            <option value="digit5">Číslice 5</option>
            <option value="custom">Vlastní obrazec (X)</option>
        </select>

        <button type="submit">Vykreslit</button>
    </form>

    <pre style="font-family: monospace;">
    <pre style="font-family: monospace;">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["size"]);
    $shape = $_POST["shape"];
    include "draw.php";
    echo drawShape($n, $shape);
}
?>
</pre>

</body>
</html>
