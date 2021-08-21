<!--GET vs. POST-->
<!--Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.-->
<!---->
<!--Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.-->
<!---->
<!--$_GET is an array of variables passed to the current script via the URL parameters.-->
<!---->
<!--$_POST is an array of variables passed to the current script via the HTTP POST method.-->