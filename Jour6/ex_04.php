<?php
function display_xml_nodes(string $xmlstr, string $node): bool
{
    $xml = simplexml_load_string($xmlstr);
    if (!$xml) {
        return false;
    }

    $nodes = $xml->xpath($node);
    if (!$nodes) {
        return false;
    }

    foreach ($nodes as $node) {
        echo $node . "\n";
    }

    return true;
}
