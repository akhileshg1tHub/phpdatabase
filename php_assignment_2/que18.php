<?php
class Validation {
    // Validate email address
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Validate password (at least 8 characters, 1 uppercase, 1 lowercase, 1 number)
    public static function validatePassword($password) {
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
        return preg_match($pattern, $password);
    }

    // Validate a generic input field (non-empty)
    public static function validateInput($input) {
        return !empty(trim($input));
    }
}

// Example usage
$email = "example@example.com";
$password = "Password123";
$input = "Some input";

echo Validation::validateEmail($email) ? "Valid Email" : "Invalid Email";
echo "\n";
echo Validation::validatePassword($password) ? "Valid Password" : "Invalid Password";
echo "\n";
echo Validation::validateInput($input) ? "Valid Input" : "Invalid Input";
?>

// output is :Valid Email Valid Password Valid Input