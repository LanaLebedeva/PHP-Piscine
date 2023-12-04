<?php
function ft_split(string $string): array
{
    $array = str_word_count($string, 1);
    sort($array);
    return $array;
}