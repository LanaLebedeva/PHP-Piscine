#!/usr/bin/php
<?php

function cmp($a, $b): int
{
    if ($a == $b) {
        return 0;
    }
    if ($a >= 'a' && $a <= 'z' || $a >= 'A' && $a <= 'Z') {
        if ($b >= 'a' && $b <= 'z' || $b >= 'A' && $b <= 'Z') {
            $a = strtolower($a);
            $b = strtolower($b);
            if ($a == $b) {
                return 0;
            }
            return ($a < $b) ? - 1 : 1;
        } else {
            return -1;
        }
    } else if (is_numeric($a)) {
        if ($b >= 'a' && $b <= 'z' || $b >= 'A' && $b <= 'Z') {
            return 1;
        } else if (is_numeric($b)) {
            return ($a < $b) ? -1: 1;
        } else {
            return -1;
        }
    } else {
        if ($b >= 'a' && $b <= 'z' || $b >= 'A' && $b <= 'Z') {
            return 1;
        } else if (is_numeric($b)) {
            return 1;
        } else {
            return ($a > $b) ? -1: 1;
        }
    }
}

    $result = [];
    print_r($argv);
    for ($i = 1; $i < $argc; ++$i) {
        $result = array_merge($result, array_filter(explode(" ", $argv[$i]), "strlen"));
    }
    usort($result, "cmp");
    foreach ($result as $item) {
        echo $item . PHP_EOL;
    }
