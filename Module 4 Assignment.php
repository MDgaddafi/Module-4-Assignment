<?php

// 1. Sort array of strings by length:
function sortStringsByLength(array $strings): array {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}

// Example usage:
$strings = ["apple", "banana", "cherry", "date", "elderberry"];
$sortedStrings = sortStringsByLength($strings);
print_r($sortedStrings); // Outputs: Array ( [0] => date [1] => apple [2] => banana [3] => cherry [4] => elderberry )

// 2. Concatenate two strings with the second starting from the end of the first:
function concatenateStringsFromEnd(string $string1, string $string2): string {
    return $string1 . strrev($string2);
}

// Example usage:
$string1 = "Hello";
$string2 = "world";
$concatenated = concatenateStringsFromEnd($string1, $string2);
echo $concatenated; // Outputs: HelloworldolleH

// 3. Remove the first and last element from an array:
function removeFirstAndLast(array $array): array {
    array_shift($array);
    array_pop($array);
    return $array;
}

// Example usage:
$fruits = ["apple", "banana", "cherry", "date", "elderberry"];
$newFruits = removeFirstAndLast($fruits);
print_r($newFruits); // Outputs: Array ( [0] => banana [1] => cherry [2] => date )

// 4. Check if a string contains only letters and whitespace:
function containsOnlyLettersAndWhitespace(string $string): bool {
    return preg_match('/^[a-zA-Z\s]+$/', $string);
}

// Example usage:
$string1 = "Hello world";
$string2 = "Hello123";
$containsOnlyLetters1 = containsOnlyLettersAndWhitespace($string1);
$containsOnlyLetters2 = containsOnlyLettersAndWhitespace($string2);
var_dump($containsOnlyLetters1); // Outputs: bool(true)
var_dump($containsOnlyLetters2); // Outputs: bool(false)

// 5. Find the second largest number in an array:
function findSecondLargestNumber(array $numbers): ?int {
    if (count($numbers) < 2) {
        return null;
    }
    rsort($numbers);
    return $numbers[1];
}

// Example usage:
$numbers1 = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3];
$numbers2 = [1];
$secondLargest1 = findSecondLargestNumber($numbers1);
$secondLargest2 = findSecondLargestNumber($numbers2);
var_dump($secondLargest1); // Outputs: int(6)
var_dump($secondLargest2); // Outputs: NULL

?>
