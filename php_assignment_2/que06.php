<?php
function zigZag(&$arr, $n) {
    for ($i = 0; $i < $n - 1; $i++) {
        if (($i % 2 == 0 && $arr[$i] > $arr[$i + 1]) || ($i % 2 != 0 && $arr[$i] < $arr[$i + 1])) {
            // Swap $arr[$i] and $arr[$i + 1]
            list($arr[$i], $arr[$i + 1]) = array($arr[$i + 1], $arr[$i]);
        }
    }
}

// Example usage
$arr = array(4, 3, 7, 8, 6, 2, 1);
$n = count($arr);
zigZag($arr, $n);
echo implode(" ", $arr);
?>
// output is : 3 7 4 8 2 6 1