<?php

try {
$file = "document.txt";
$file_handle = fopen($file, 'w');

$file_text_to_write = "PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group.";

fwrite($file_handle, $file_text_to_write);

fclose($file_handle);

$file_handle = fopen($file, 'r');

while (!feof($file_handle)) {
    echo "Hello".fgets($file_handle);
}

fclose($file_handle);
} catch (Exception $exception) {
    echo $exception->getMesssage();
}