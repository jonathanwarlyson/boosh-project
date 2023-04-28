<?php

define('DEV', true); //em desenvolvimento ou no ar? Desenvolvimento = true | no ar = false
define("DOC_ROOT", '/boosh/boosh/public/'); //caminho absoluto do doc root
define("ROOT_FOLDER", 'public'); //nome da pasta do doc root

//configurações do banco de dados
$type = 'mysql'; //tipo de banco de dados
$server = 'localhost'; //servidor que o banco de dados está
$db = 'boosh-project'; //nome do banco de dados
$port = '3306'; //8889 no MAMP e 3306 no XAMP
$charset = 'utf8mb4'; //codificação UTF-8 usando 4 bytes de dados por caractere 
$username = 'jonathanwarlyson'; //USUÁRIO AQUI
$password = '09112004JW-ts'; //SENHA AQUI
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset"; //NÃO MUDAR

?>