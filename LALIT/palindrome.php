

<?php
// PHP code to check for Palindrome string in PHP
// Using strrev()
function Palindrome($string) {
    if (strrev($string) == $string) {
        return 1;
    } 
    else {
        return 0;
    }
}
$original = "123456";
if (Palindrome($original)) {
    echo "The Given number is Palindrome";
} 
else {
    echo "The given number is not a Palindrome";
}
?>

