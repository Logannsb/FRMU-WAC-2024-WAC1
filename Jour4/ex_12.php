<?php
function is_similar($za, $zb)
{
    $type_fol1 = gettype($za);
    $type_fol2 = gettype($zb);

    if ($za == $zb) {
        print("Same value.\n");
    }
    if (gettype($za) == gettype($zb)) {
        print("Same type.\n");
    }
    if ($type_fol1 === $type_fol2) {
        print("Same type and value.\n");
    }
}
