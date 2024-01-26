<?php
// wap in php to change nextline using EOL(end of line hit the Enter and change line)

echo 'Line 1';
echo '\n';//nextline or newline does not work in '/n' single line
echo 'Line2';
echo "\n";// next line will work in "\n" double qoutes
echo 'line 3';
echo PHP_EOL; // it is used to change the line  using\r\n

echo 'line 4';
echo PHP_EOL; // it is used to change the line  using\r\n

echo 'line 5';
echo PHP_EOL; // it is used to change the line  using\r\n

echo JSON_ENCODE(PHP_EOL);// in php function are not case senstive
echo php_eol; // it is underdefined constant:it will cause FATAL_ERROR.
echo JSON_ECODE(PHP_EOL);
        




?>