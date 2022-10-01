<?php
/*
A cookie is a small file that the server embeds on the users computer.
Each time the same computer requests a page with a browser, it will send the cookie too.
With PHP, you can both create and retrieve cookie values.

setcookie(name, value, expire, path, domain, secure, httponly);
 */
// Set cookie variables

$cookie_name = "user";
$cookie_value = "Mokammel Hossain Tanvir";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html>
<body>
<?php

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

// set the expiration date to one hour ago
setcookie($cookie_name, "", time() - 3600);
?>
</body>
</html>