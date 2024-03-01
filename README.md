#PHP Learning

1. Syntax Basics: 

PHP is a server-side scripting language designed for web development, but it can also be used as a general-purpose programming language. Here are some fundamental syntax rules: 

PHP code is enclosed within <?php ?> tags:

```php
<?php    // 
echo "Hello World!";   //echo is used to print

/* This is multi-line comment*/

```

PHP statements end with a semicolon ;. 

Comments can be added using ```//``` for single-line comments or ```/* */``` for multi-line comments. 


2. Variables: 

Variables are used to store data that can be manipulated and referenced within a script. In PHP, variable names start with a dollar sign (```$```) followed by the variable name. Variable names are case-sensitive. 
 

3. Data Types: 

PHP supports various data types, including: 

String: Sequence of characters enclosed in single quotes (```'```) or double quotes (```"```). 
```php
$myStr = 'Nayan';   //string is written inside single or double quotes
```

Integer: Whole numbers without any decimal points. 
```php
$myInteger = 10;
```

Float: Numbers with decimal points. 
```php
$myFloat = 8.33;
```

Boolean: Represents true or false. 
```php
$myBoolean = true;
```

Array: Collection of key-value pairs. 
```php
$myArray = [1,2,3,4,5];
```

Object: Instances of classes. 

NULL: Represents a variable with no value assigned. 
```php
$myNull = null;
```

 

4. Operators: 

PHP supports a wide range of operators for arithmetic, comparison, logical operations, etc. Here are some common ones: 

Arithmetic Operators: 
```php
+, -, *, /, % 
```
% is modulus. 

Assignment Operators:
```php
=, +=, -=, *=, /=, %=
```
etc.

Comparison Operators: 
```php
==, !=, >, <, >=, <=, ===, !==
```

Logical Operators:
```php
&&, ||, !
```

String Concatenation Operator:
```php
.
``` 
(dot). 

Increment/Decrement Operators:
```php
++, --
```

Ternary Operator:
```php
? :
```
