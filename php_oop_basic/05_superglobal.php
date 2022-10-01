<?php
/*
Some predefined variables in PHP are "superglobals",
which means that they are always accessible,
regardless of scope - and you can access them from any function,
class or file without having to do anything special.

The PHP superglobal variables are:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

 */

// $GLOBALS
// The $GLOBALS array is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).
// $x = 75;
// $y = 25;

// function addition()
// {
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
// addition();
// echo $z;

// $_SERVER
// The $_SERVER variable contains information such as headers, paths, and script locations.
// The entries in this array are created by the web server.
// There is no guarantee that every web server will provide any of these; servers may omit some, or provide others not listed here.
// That said, a large number of these variables are accounted for in the CGI/1.1 specification, so you should be able to expect those.
// In addition, any new variables introduced in future versions of the specification will be added to this array.
// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['HTTP_REFERER'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['SCRIPT_NAME'];
?>
<?php
// $_REQUEST
// The $_REQUEST variable is used to collect data after submitting an HTML form.
// $_REQUEST can also collect data sent in the URL.
// If we have used GET method to send the data, $_REQUEST will collect data after submitting an HTML form.
// If we have used POST method to send the data, $_REQUEST will collect data after submitting an HTML form.
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
echo $_REQUEST['fname'];