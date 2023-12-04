#!/usr/bin/php
<?php
while (true) {
    echo 'Enter a number: ';
    $line = fgets(STDIN);;
    $line = rtrim($line, "\n");
    if (is_numeric($line)) {
        echo 'The number ' . $line;
        if ($line % 2 === 0) {
            echo ' is even' . PHP_EOL;
        } else {
            echo ' is odd' . PHP_EOL;
        }
    } else {
        if (feof(STDIN)) {
            echo PHP_EOL;
            exit();
        }
        echo "'" . $line . "'" . ' is not a number' . PHP_EOL;
    }
}
