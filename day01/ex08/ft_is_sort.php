<?php
function ft_is_sort(array $array): bool
{
    if (count($array) !== 0) {
        $previous = $array[0];
        foreach ($array as $item) {
            if ($previous > $item) {
                return false;
            }
            $previous = $item;
        }
    }
    return true;
}
