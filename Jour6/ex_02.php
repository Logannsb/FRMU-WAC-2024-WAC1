<?php
function my_cat_files(string ...$paths): string
{
    $content = "";
    foreach ($paths as $path) {
        if (file_exists($path)) {
            $file_content = file_get_contents($path);
            $content .= $file_content . "\n_____";
            $content .= "Le fichier $path n'existe pas.\n_____";
        }
        return $content;
    }
}
