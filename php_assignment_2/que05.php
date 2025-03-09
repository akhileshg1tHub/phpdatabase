<?php
function findElement($arr, $n) {
    $leftMax = PHP_INT_MIN;
    $rightMin = array_fill(0, $n, PHP_INT_MAX);

    for ($i = $n - 2; $i >= 0; $i--) {
        $rightMin[$i] = min($rightMin[$i + 1], $arr[$i + 1]);
    }

    for ($i = 0; $i < $n; $i++) {
        if ($leftMax < $arr[$i] && $rightMin[$i] > $arr[$i]) {
            return $arr[$i];
        }
        $leftMax = max($leftMax, $arr[$i]);
    }

    return -1; // No such element found
}

// Example usage
$arr = [4, 3, 2, 5, 8, 6, 7];
$n = count($arr);
$result = findElement($arr, $n);
if ($result != -1) {
    echo "The first element is: " . $result;
} else {
    echo "No such element found.";
}
?>
// output is : The first element is: 5
