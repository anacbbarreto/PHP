<?php
$mysql = new mysqli('localhost','root', '', 'blog');
$mysql->set_charset('utf8');


if($mysql == FALSE){

    echo "erro na conexão";
}
/*
banco de dados
link de acesso: localhost/phpmyadmin/
*/
?>