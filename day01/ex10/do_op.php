#!/usr/bin/php
<?php
if ($argc !==4) {
    echo ("Three arguments are needed!") . PHP_EOL;
} else {
    $firs = trim($argv[1]);
    $op = trim($argv[2]);
    $second = trim($argv[3]);
    if (!is_numeric($firs) || !is_numeric($second)) {
        echo ('I perform operations only on numbers');
    } else {
        $result = match($op) {
            '-' => $firs - $second,
            '+' => $firs + $second,
            '/' => $firs / $second,
            '*' => $firs * $second,
            '%' => $firs % $second,
            default => 'Unknown operator'
        };
        echo $result . PHP_EOL;
    }
}
