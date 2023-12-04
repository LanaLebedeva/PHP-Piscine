#!/usr/bin/php
<?php
const SYMBOL = 'X';
const NUMBER_OF_SYMBOL_PER_LINE = 100;
const NUMBER_OF_SYMBOL = 1000;

$line = ceil(NUMBER_OF_SYMBOL / NUMBER_OF_SYMBOL_PER_LINE);
for ($i = 0; $i < $line; ++$i) {
    for ($j = 0; $j < NUMBER_OF_SYMBOL_PER_LINE; ++$j) {
        echo SYMBOL;
    }
    echo PHP_EOL;
}
