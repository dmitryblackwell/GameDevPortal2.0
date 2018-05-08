<?php
    require_once 'variables.php';//требуем все константы и функции
    if (isset($_GET['submit_btn'])) {
        $email = hack_save($_GET['email']);//сохраняем в переменных данные из формы
        $name = hack_save($_GET['name']);
        $score = hack_save($_GET['score']);
        $dbc = mysqli_connect(HOST_NAME, USER_NAME, PASSWORD, DATABASE);
        //создаем таблицу
/*
        $query = "CREATE TABLE test_results(
                _id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
                email VARCHAR(32),
                approved TINYINT,
                name VARCHAR(32),
                score INT UNSIGNED)";
        mysqli_query($dbc, $query);
*/
        //проверяем данные
        $is_it_ok = true;
        if ($score > 200 || $score < 100) {//счет не может быть больше 200 или меньше 100, это же тип зно
            $is_it_ok = false;
        }
        $query="SELECT COUNT(*) FROM test_results WHERE email='$email'";
        $result=mysqli_query($dbc,$query);
        if (mysqli_fetch_array($result)['COUNT(*)']){// Если такой парниша (или сучка) уже есть в бд
            $is_it_ok=false;
        }
        //вносим данные в бд
        if ($is_it_ok) {
            $query = "INSERT INTO test_results VALUES (0,'$email',0,'$name',$score)";
            $result = mysqli_query($dbc, $query);
            echo "<p>Your result will be obtain in less than 24 hours. Thanks for waiting</p>";//пишем, что вссе ок
        }
        else{
            echo "<p>Oops...Something goes wrong. Maybe you enter not correct info or you already registred</p>";
        }
        mysqli_close($dbc);//закрываем
    }
?>
<form method="get" action="<?php $_SERVER['PHP_SELF']?>">
    <label>Email: </label><br>
    <input type="email" name="email"><br>
    <label>Your name and surname:</label><br>
    <input type="text" name="name"><br>
    <label>Your test score: </label><br>
    <input type="text" name="score"><br>
    <input type="submit" name="submit_btn"><br>
</form>
