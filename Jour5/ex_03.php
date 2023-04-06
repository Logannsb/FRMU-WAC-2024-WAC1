<?php
function my_add_to_cookie(string $key, string $value)
{
    htmlspecialchars($_COOKIE[$key = $value]) . "toto";
}
