<?php
use PhpHelper\Functions;

if(!function_exists('str_starts_with')){
    /**
     * The function returns true if the passed $haystack starts from the $needle string or false otherwise.
     *
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    function str_starts_with(string $haystack, string $needle){
        return Functions::str_starts_with($haystack, $needle);
    }
}

if(!function_exists('str_ends_with')){
    /**
     * The function returns true if the passed $haystack ends with the $needle string or false otherwise.
     *
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    function str_ends_with(string $haystack, string $needle){
        return Functions::str_ends_with($haystack, $needle);
    }
}

if(!function_exists('str_contains')){
    /**
     * Checks if $needle is found in $haystack and returns a boolean value (true/false) whether or not the $needle was found.
     *
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    function str_contains(string $haystack, string $needle){
        return Functions::str_contains($haystack, $needle);
    }
}

if(!function_exists('str_replace_first')){
    /**
     * Replace text within a portion of a string.
     *
     * @param $search
     * @param $replace
     * @param $subject
     * @return string
     */
    function str_replace_first($search, $replace, $subject){
        return Functions::str_replace_first($search, $replace, $subject);
    }
}

if(!function_exists('return_if')){
    /**
     * @param $cond
     * @param $if
     * @param $else
     * @return mixed
     */
    function return_if($cond, $if, $else = null){
        return Functions::return_if($cond, $if, $else);
    }
}

if(!function_exists('echo_if')){
    /**
     * @param $cond
     * @param $if
     * @param $else
     * @return bool
     */
    function echo_if($cond, $if, $else = ''){
        return Functions::echo_if($cond, $if, $else);
    }
}