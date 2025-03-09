<?php
function rearrangeArray($arr) {
    $n = count($arr);
    $result = [];
    
    $left = 0;
    $right = $n - 1;
    
    $toggle = true;
    
    while ($left <= $right) {
        if ($toggle) {
            $result[] = $arr[$right--];
        } else {
            $result[] = $arr[$left++];
        }
        $toggle = !$toggle;
    }
    
    return $result;
}

// Example usage:
$sortedArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$rearrangedArray = rearrangeArray($sortedArray);
print_r($rearrangedArray);
?>

// output is:Array ( [0] => 9 [1] => 1 [2] => 8 [3] => 2 [4] => 7 [5] => 3 [6] => 6 [7] => 4 [8] => 5 )