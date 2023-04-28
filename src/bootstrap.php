<?php
define('APP_ROOT', dirname(__FILE__, 2)); //diretório do root
require APP_ROOT . '/src/functions.php'; //funções
require APP_ROOT . '/config/config.php'; //dados de configuração

if (DEV === false) {
    set_exception_handler('handle_exception');
    set_error_handler('handle_error');
    register_shutdown_function('handle_shutdown');
}

spl_autoload_register(function($class) //configura função autoload
{
    $path = APP_ROOT . '/src/classes/';
    require $path . $class . '.php';
});

$cms = new CMS($dsn, $username, $password); //cria objeto CMS
unset($dsn, $username, $password); //remove dados do banco de dados config