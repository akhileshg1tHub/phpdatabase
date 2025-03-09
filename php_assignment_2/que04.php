<?php
function trapRainWater($arr, $n) {
    if ($n <= 2) {
        return 0;
    }

    $left = array_fill(0, $n, 0);
    $right = array_fill(0, $n, 0);
    $water = 0;

    $left[0] = $arr[0];
    for ($i = 1; $i < $n; $i++) {
        $left[$i] = max($left[$i - 1], $arr[$i]);
    }

    $right[$n - 1] = $arr[$n - 1];
    for ($i = $n - 2; $i >= 0; $i--) {
        $right[$i] = max($right[$i + 1], $arr[$i]);
    }

    for ($i = 0; $i < $n; $i++) {
        $water += min($left[$i], $right[$i]) - $arr[$i];
    }

    return $water;
}

$arr = array(3, 0, 0, 2, 0, 4);
$n = count($arr);
echo "The amount of trapped rain water is " . trapRainWater($arr, $n);
?>

// output is : The amount of trapped rain water is 10