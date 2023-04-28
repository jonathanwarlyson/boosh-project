<?php

    function redirect(string $location, array $parameters = []) 
    {
        $qs = $parameters ? '?' . http_build_query($parameters) : '';
        $location = $location . $qs;
        header('Location: ' . $location);
        exit;
    }

?>