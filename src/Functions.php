<?php
namespace PhpHelper;

class Functions
{

    public static function str_starts_with(string $haystack, string $needle)
    {
        if(function_exists('str_starts_with')){
            return str_starts_with($haystack, $needle);
        } else {
            return substr($haystack, 0, strlen($needle)) === $needle;
        }
    }

    public static function str_ends_with(string $haystack, string $needle)
    {
        if(function_exists('str_ends_with')){
            return str_ends_with($haystack, $needle);
        } else {
            return substr($haystack, -strlen($needle)) === $needle;
        }
    }

    public static function str_contains(string $haystack, string $needle): bool
    {
        if(function_exists('str_contains')){
            return str_contains($haystack, $needle);
        } else {
            return strpos($haystack, $needle) !== false;
        }
    }

    public static function str_replace_first($search, $replace, $subject){
        $pos = strpos($subject, $search);
        if($pos !== false) {
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }
        return $subject;
    }

}