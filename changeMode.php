<?php
if (isset($_GET['mode'])) {
    if ($_GET['mode'] == 'light') {
        setcookie('mode', 'light', time()+60*60*24*365);
    } elseif ($_GET['mode'] == 'dark') {
        setcookie('mode', 'dark', time()+60*60*24*365);
    }
}
header('location:home.php');