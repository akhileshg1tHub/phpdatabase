<?php
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function findDuplicateEmails($emails) {
    $emailCounts = array_count_values($emails);
    $duplicates = array_filter($emailCounts, function($count) {
        return $count > 1;
    });
    return array_keys($duplicates);
}

$emails = [
    "test@example.com",
    "invalid-email",
    "user@domain.com",
    "test@example.com",
    "another@domain.com",
    "user@domain.com"
];

$validEmails = array_filter($emails, 'validateEmail');
$duplicateEmails = findDuplicateEmails($validEmails);

echo "Duplicate Emails:\n";
foreach ($duplicateEmails as $email) {
    echo $email . "\n";
}
?>

// output is :Duplicate Emails:
              test@example.com
              user@domain.com