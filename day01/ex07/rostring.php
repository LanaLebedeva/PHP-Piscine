#!/usr/bin/php
<?php
function ssap(int $argc, array $argv): array {
    $result = [];
    for ($i = 1; $i < $argc; ++$i) {
        $result = array_merge($result, str_word_count($argv[$i], 1));
    }
    sort($result);
    return $result;
}

$result = ssap($argc, $argv);

$shift = array_shift($result);

array_pop($result);

$result[] = $shift;
echo implode(' ', $result) . PHP_EOL;

