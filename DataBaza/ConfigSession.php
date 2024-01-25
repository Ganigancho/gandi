<?php

session_start([
    'use_only_cookies' => 1,
    'use_strict_mode' => 1,
    'cookie_lifetime' => 1800,
    'cookie_domain' => 'localhost',
    'cookie_path' => '/',
    'cookie_secure' => isset($_SERVER['HTTPS']),
    'cookie_httponly' => true
]);

if (!isset($_SESSION["last_regeneration"])) {
    regenerate_session_id();
} else {
    $interval = 60 * 80;
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        regenerate_session_id();
    }
}

function regenerate_session_id()
{
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
}
?>
