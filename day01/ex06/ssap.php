#!/usr/bin/php
<?php
$result = [];
for ($i = 1; $i < $argc; ++$i) {
    $result = array_merge($result, str_word_count($argv[$i], 1));
}
sort($result);
foreach ($result as $item) {
    echo $item . PHP_EOL;
}