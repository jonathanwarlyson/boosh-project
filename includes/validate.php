<?php 

    function is_number($number, $min = 0, $max = 100): bool {
        return ($number >= $min and $number <= $max);
    }

    function is_text($text, int $min = 0, int $max = 10000): bool {
        $length = mb_strlen($text);
        return ($length >= $min and $length <= $max);
    }

?>