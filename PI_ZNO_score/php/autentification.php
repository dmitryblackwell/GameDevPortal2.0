<?php //аутентификация
    $user_name="admin";
    $pw="faster";//mysqli_fetch_array($result)['password'];
    if (!isset($_SERVER['PHP_AUTH_USER']) || //если не ввели логин
        !isset($_SERVER['PHP_AUTH_PW']) ||  //или пароль
        $_SERVER['PHP_AUTH_USER'] !=$user_name ||//   //или если логин не совпает с тем которые в бд
        $_SERVER['PHP_AUTH_PW'] !=$pw){ //или если пароль не совпадает
        //тогда все плохо, нас пытаются хакнуть! Хьюююстон!
        header('HTTP/1.1 401 Unauthorized');
        header('WWW-Authenticate: Basic realm="Auto"');
        exit("<p align='center'>Sorry bro!<br><a href='index.php'>Go to results.</a></p> ");
    }
?>