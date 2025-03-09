<?php
function separateWords($words) {
    $result = [
        'A' => [],
        'G' => [],
        'L' => [],
        'Q' => [],
        'W' => []
    ];

    foreach ($words as $word) {
        $firstLetter = strtoupper($word[0]);
        if (isset($result[$firstLetter])) {
            $result[$firstLetter][] = $word;
        }
    }

    return $result;
}

// Example usage:
$words = ['Apple', 'Grape', 'Lemon', 'Quail', 'Watermelon', 'Avocado', 'Guava', 'Lime', 'Quince', 'Walnut'];
$separatedWords = separateWords($words);
print_r($separatedWords);
?>
//output is:Array ( [A] => Array ( [0] => Apple [1] => Avocado ) [G] => Array ( [0] => Grape [1] => Guava ) [L] => Array ( [0] => Lemon [1] => Lime ) [Q] => Array ( [0] => Quail [1] => Quince ) [W] => Array ( [0] => Watermelon [1] => Walnut ) )    