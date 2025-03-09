<?php
function countTriplets($arr, $n) {
    // Sort the array to use the two-pointer technique
    sort($arr);
    $count = 0;

    // Iterate for each element as the "third element"
    for ($i = $n - 1; $i >= 0; $i--) {
        $left = 0;
        $right = $i - 1;

        // Use two pointers to find pairs that sum up to $arr[$i]
        while ($left < $right) {
            if ($arr[$left] + $arr[$right] == $arr[$i]) {
                $count++;
                $left++;
                $right--;
            } elseif ($arr[$left] + $arr[$right] < $arr[$i]) {
                $left++;
            } else {
                $right--;
            }
        }
    }

    return $count;
}

// Example Input
$arr = array(1, 5, 3, 2);
$n = count($arr);

// Output
echo "Number of triplets: " . countTriplets($arr, $n);
?>

//Output is : Number of triplets: 2