<?php
function my_add_to_session(string $key, string $value)
{
    $_SESSION[$key] = $value . "titi";
}
