<?php

// Trong PHP có những biến gọi là Superglobals
// Có nghĩa là chúng luôn có thể truy cập được, bất kỳ phạm vi, bất kỳ hàm, class, mà k cần phải làm gì.

//$GLOBALS access global variables from anywhere
//$_SERVER holds information about headers, paths, and script locations.
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];