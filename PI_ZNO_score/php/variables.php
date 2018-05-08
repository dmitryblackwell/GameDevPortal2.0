<?php
    function hack_save($string){//проверка вводимых данных
        return htmlentities(stripslashes($string));
    }
    define("USER_NAME","blackwell");// имя юзера
    define("PASSWORD","FuckYouHaHa");// пароль
    define("DATABASE","logins");//имя бд
    define("HOST_NAME","localhost");//имя сервера

    define("SALT_START", 'f@$ter');//соли
    define("SALT_END", 'b@b$');
?>