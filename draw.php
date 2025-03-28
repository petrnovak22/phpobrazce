<?php
function drawShape($n, $shape) {
    switch ($shape) {
        case "square":
            return drawSquare($n);
        case "letterT":
            return drawLetterT($n);
        case "letterE":
            return drawLetterE($n);
        case "digit5":
            return drawDigit5($n);
        case "custom":
            return drawCustom($n);
        default:
            return "Neplatná volba.";
    }
}

function drawSquare($n) {
    $output = "";
    for ($i = 0; $i < $n; $i++) {
        $output .= str_repeat("# ", $n) . "<br>";
    }
    return $output;
}


function drawLetterT($n) {
    $output = str_repeat("# ", $n) . "<br>";
    $middle = floor($n / 2);
    for ($i = 1; $i < $n; $i++) {
        $output .= str_repeat("&nbsp;&nbsp;", $middle) . "#<br>";
    }
    return $output;
}

function drawLetterE($n) {
    $output = str_repeat("# ", $n) . "<br>";
    for ($i = 1; $i < $n - 1; $i++) {
        $output .= ($i == floor($n / 2) ? str_repeat("# ", $n) : "#") . "<br>";
    }
    $output .= str_repeat("# ", $n) . "<br>";
    return $output;
}

function drawDigit5($n) {
    $output = str_repeat("# ", $n) . "<br>";
    for ($i = 1; $i < floor($n / 2); $i++) {
        $output .= "#<br>";
    }
    $output .= str_repeat("# ", $n) . "<br>";
    for ($i = floor($n / 2) + 1; $i < $n - 1; $i++) {
        $output .= str_repeat("&nbsp;&nbsp;", $n - 1) . "#<br>";
    }
    $output .= str_repeat("# ", $n) . "<br>";
    return $output;
}

function drawCustom($n) {
    $output = "";
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == $j || $i + $j == $n - 1) {
                $output .= "# ";
            } else {
                $output .= "&nbsp;&nbsp;";
            }
        }
        $output .= "<br>";
    }
    return $output;
}
?>
