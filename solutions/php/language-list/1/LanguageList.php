<?php

function language_list(...$args)
{
    return $args ? $args : [];
}

function add_to_language_list($array, $newLanguage)
{
    $array[] = $newLanguage;

    return $array;
}

function prune_language_list($array)
{
    array_shift($array);

    return $array;
}

function current_language($languageList)
{
    return $languageList[0];
}

function language_list_length($languageList)
{
    return count($languageList);
}
