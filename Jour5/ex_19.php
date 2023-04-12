<?php
function get_authorized_users(string $permission, array $users)
{
    $authorized_users = array();
    foreach ($users as $user) {
        if (has_permission($user, $permission)) {
            $authorized_users[] = $user;
        }
    }

    foreach ($authorized_users as $user) {
        echo $user . PHP_EOL;
    }
}

function has_permission(string $user, string $permission)
{
    $admins = array("hamid", "michel");
    return $permission === "admin" && in_array($user, $admins);
}

$users = array("hamid", "Bob", "michel", "cem");
get_authorized_users("admin", $users);
