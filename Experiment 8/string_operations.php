<?php
// Sample strings
$string1 = "Hello, World!";
$string2 = "PHP String Operations";
$string3 = "This is a sample string.";

// String Length
$length1 = strlen($string1);
$length2 = strlen($string2);

// String Concatenation
$concatenated = $string1 . " " . $string2;

// String Positioning
$position = strpos($string2, "String");

// String Replacement
$replaced = str_replace("sample", "test", $string3);

// String Comparison
$comparison = strcmp($string1, $string2);

// String Conversion
$upper = strtoupper($string1);
$lower = strtolower($string2);

// Output results
echo "<h1>PHP String Operations</h1>";
echo "<p>String 1: $string1</p>";
echo "<p>Length of String 1: $length1</p>";
echo "<p>Length of String 2: $length2</p>";
echo "<p>Concatenated String: $concatenated</p>";
echo "<p>Position of 'String' in String 2: $position</p>";
echo "<p>Replaced String: $replaced</p>";
echo "<p>Comparison Result: $comparison</p>";
echo "<p>Uppercase String 1: $upper</p>";
echo "<p>Lowercase String 2: $lower</p>";
?>
