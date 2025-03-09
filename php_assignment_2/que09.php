<?php
function generateRandomString($length) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateUniqueRandomNumber() {
    return rand(1000, 9999);
}

function generateFormattedString() {
    $part1 = generateRandomString(5);
    $part2 = generateUniqueRandomNumber();
    $part3 = generateRandomString(1);
    return $part1 . $part2 . $part3;
}

echo generateFormattedString();
?>

//output is : ZYXWV1234A