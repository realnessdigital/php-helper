<?php
namespace PhpHelper;

class Functions
{

    /**
     * The function returns true if the passed $haystack starts from the $needle string or false otherwise.
     *
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    public static function str_starts_with(string $haystack, string $needle)
    {
        if(function_exists('str_starts_with')){
            return str_starts_with($haystack, $needle);
        } else {
            return substr($haystack, 0, strlen($needle)) === $needle;
        }
    }

    /**
     * The function returns true if the passed $haystack ends with the $needle string or false otherwise.
     *
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    public static function str_ends_with(string $haystack, string $needle)
    {
        if(function_exists('str_ends_with')){
            return str_ends_with($haystack, $needle);
        } else {
            return substr($haystack, -strlen($needle)) === $needle;
        }
    }

    /**
     * Checks if $needle is found in $haystack and returns a boolean value (true/false) whether or not the $needle was found.
     *
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    public static function str_contains(string $haystack, string $needle): bool
    {
        if(function_exists('str_contains')){
            return str_contains($haystack, $needle);
        } else {
            return strpos($haystack, $needle) !== false;
        }
    }

    /**
     * Replace text within a portion of a string.
     *
     * @param $search
     * @param $replace
     * @param $subject
     * @return string
     */
    public static function str_replace_first($search, $replace, $subject){
        $pos = strpos($subject, $search);
        if($pos !== false) {
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }
        return $subject;
    }

}