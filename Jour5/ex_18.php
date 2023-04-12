<?php
function check_user_acl(array $user, string $perm)
{
    $user = [" login " => "deslog_m", "permissions" => [
        "launch_pangolinette",
        "troll_student"
    ]];
    check_user_acl($user, "launch_pangolinette");
    return TRUE;
    check_user_acl($user, "kill_kittens");
    return FALSE;
}
