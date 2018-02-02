<?php
if (isset($_SESSION['loggedin'])) {
    header("Location: http://www.google.com");
    exit();
} elseif (isset($_COOKIE['Loggedin'])) {
    header("Location: http://www.google.com");
    exit();
}
