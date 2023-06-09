<?php 

class Validate 
{

    public static function isNumber($number, $min = 0, $max = 3000): bool {
        return ($number >= $min and $number <= $max);
    }

    public static function isText(string $string, int $min = 0, int $max = 1000): bool {
        $length = mb_strlen($string);
        return ($length >= $min and $length <= $max);
    }

}