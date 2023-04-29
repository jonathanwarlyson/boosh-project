<?php

    function redirect(string $location, array $parameters = []) 
    {
        $qs = $parameters ? '?' . http_build_query($parameters) : '';
        $location = $location . $qs;
        header('Location: ' . $location);
        exit;
    }

    function html_escape($text): string 
    {
        $text = $text ?? '';
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8', false);
    }

?>