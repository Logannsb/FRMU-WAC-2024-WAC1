<?php
function my_get_weird_info()
{
    if (!isset($_GET["nbr_elem"]) || $_GET["nbr_elem"] <= 0) {
        return NULL;
    }

    $nbr = $_GET["nbr_elem"];
    if ($nbr >= count($_GET)) {
        foreach ($_GET as $key => $value) {
            echo '$_GET["', $key, '"] = "', $value, '"\n';
            if ($nbr != 0) {
                $nbr--;
            } else {
                return;
            }
        }
    }
    return NULL;
}
