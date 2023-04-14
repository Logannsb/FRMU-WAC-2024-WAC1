<?php
function my_mail(string $mail): void
{
    $pos_at = strpos($mail, '@');
    $pos_dot = strrpos($mail, '.', $pos_at);
    if ($pos_at !== false && $pos_dot !== false) {
        $substring = substr($mail, $pos_at + 1, $pos_dot - $pos_at - 1);
        echo "$substring\n";
    }
}
//echo my_mail("test un doux trois"); 
//echo my_mail("contact@coucoujemaffiche.com");
//echo my_mail("michel.bresil@yopmail.com.thai"); 
