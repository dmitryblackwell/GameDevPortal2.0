<?php
require_once 'PhpScripts/logins.php';
if (!isset($_COOKIE['name']) && !isset($_COOKIE['_id'])){
    $ErrorMsg="";
    $dbc=mysqli_connect($hn,$un,$pw,$db) or die('Error connection to database');
    if (isset($_GET['username']) && isset($_GET['password'])){
        $name=FixString($_GET['username']); // получаем из формы имя
        $token=hash('ripemd128',FixString($_GET['password']));// и пароль который переводим в 16-ричную систему

        $query = "SELECT COUNT(*) FROM  ScoreList WHERE name='$name' AND token='$token'";// проверяем ест ли такой пользователь в БД
        $result=mysqli_query($dbc,$query);
        if(mysqli_fetch_array($result)['COUNT(*)']){
            $query = "SELECT _id FROM  ScoreList WHERE name='$name' AND token='$token'";
            $result=mysqli_query($dbc,$query);
            setcookie('_id',mysqli_fetch_array($result)['_id'],time()+3600*24*30);
            setcookie('name',$name,time()+3600*24*30); //,time()-3600*24*30
        }
        else{
            $query="SELECT COUNT(*) FROM  ScoreList WHERE name='$name'";
            $result=mysqli_query($dbc,$query);
            if (mysqli_fetch_array($result)['COUNT(*)']){// то проверяем не занято имя
                $ErrorMsg = "<p id=\'text\'>This name already taken</p>";
            }
            else{// и если все норм сохраняем
                $query="INSERT INTO ScoreList (name,token) VALUES ('$name','$token') ";
                $result=mysqli_query($dbc,$query);
                setcookie('name',$name,time()+3600*24*30);
                $query = "SELECT _id FROM  ScoreList WHERE name='$name' AND token='$token'";
                $result=mysqli_query($dbc,$query);
                setcookie('_id',mysqli_fetch_array($result)['_id'],time()+3600*24*30);
            }
        }

        header("Refresh:0");
    }
    mysqli_close($dbc);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'PhpGears/includes.php';?>
    <title>Snake</title>
    <meta name="description" content="Snake">
    <meta name="keywords" content="Snake, js, game, online">

</head>
<body>
<div class="container">
    <header>
        <?php
            include_once 'PhpGears/Header.php';
            include_once 'PhpGears/BottomGameMenu.php';
        ?>
        <script>
            document.getElementById("GameLi").style.backgroundColor="#D3FFFE";
            document.getElementById("SnakeLi").style.backgroundColor="#ff8c45";
        </script>
    </header>
    <main class="row no-gutters" id="MainContent">
        <?php
            require_once 'PhpScripts/logins.php';
            if (!isset($_COOKIE['name']) && !isset($_COOKIE['_id'])) {// если нужно выводим форму регистрации\входа
                echo $ErrorMsg;
                echo "<p id='text'>Please enter your name, so we can save your result. <br>And enter/create password, so you can return later.<br> <br>How to play: <br> Use arrows or WASD to move snake<br> Red dots - it is poison, don't eat them<br>Green dots - it is food? that add you a score.</p>";
                echo "<p><form id='FormName' method='get' action='Snake.php'>";
                echo "<label>Username: </label> <input type='text' name='username' maxlength='32' autofocus required> <label> Password: </label><input type='password' maxlength='32' name='password' 1 required><input type='submit' value='submit'> </form><br><br></p>";
                echo "<p id='text'></p>";
            }
            else{
                echo "<canvas id=\"canvas\" width=\"400\" height=\"400\"></canvas>";
            }
        ?>
    </main>

    <?php include_once 'PhpGears/footer.php';?>

</div>
</body>
</html>