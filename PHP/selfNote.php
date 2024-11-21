<?php.......... ?>
var_dump(x); = to get the data type of variable (because while declearing variable php automatically define type of variable)

*difference btwn echo and print*
answer ; The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

*use txt and variable in echo*
echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y

*DATA TYPE in php*
PHP supports the following data types:
String
Integer
Float (floating point numbers - also called double)
Boolean				eg:	$x = true;
Array				eg:	$cars = array("Volvo","BMW","Toyota");
Object
NULL
Resource


*Constructor*
If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

*Null *
$x = null;
or if we created a variable without value is will become null automatically


*String using double and single quotation mark
-Double quoted strings perform action on special characters.
-Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:


*String Length*
The PHP strlen() function returns the length of a string.

*Word Count*
The PHP str_word_count() function counts the number of words in a string.

*Search For Text Within a String*
The PHP strpos() function searches for a specific text within a string.
echo strpos("Hello world!", "world");
//Output is 6
echo strpos("Hello world!", "rld");
//Output is 8

*const vs. define()*
const are always case-sensitive
define() has has a case-insensitive option.
const cannot be created inside another block scope, like inside a function or inside an if statement.
define can be created inside another block scope.

*PHP Constant Arrays*
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

operator ===
===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types

*Ternary Operaor *
?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE

*Null coalescing*
??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7

*If condition
if (condition) {
  code to be executed if condition is true;
}

Switch case stamement
switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
}

**The foreach Loop on Arrays*
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

**Keys and Values*
The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.

Associative arrays are different, associative arrays use named keys that you assign to them, and when looping through associative arrays, you might want to keep the key as well as the value.

This can be done by specifying both the key and value in the foreach defintition, like this:

//code : 

	$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}













