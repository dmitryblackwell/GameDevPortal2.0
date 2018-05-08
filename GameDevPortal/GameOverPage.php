<?php
// когда игра окончена идем сюда

    require_once 'PhpScripts/logins.php';
    $dbc=mysqli_connect($hn,$un,$pw,$db) or die('Error connection to database');
    $score=0;
    if (isset($_GET['u_score'])){
        $score= FixString($_GET['u_score']);
    }
    $id=$_COOKIE['_id'];
    $query = "SELECT score FROM ScoreList WHERE _id='$id' ";
    $result=mysqli_query($dbc,$query);
    if (mysqli_fetch_array($result)['score']<$score){
        $query = "UPDATE ScoreList SET score='$score' WHERE _id='$id'";
        $result=mysqli_query($dbc,$query);
    }
        mysqli_close($dbc);

    /*
     $query = "CREATE TABLE ScoreList(
                _id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
                name VARCHAR(32),
                token VARCHAR(32),
                score INT UNSIGNED)";
        mysqli_query($dbc, $query);
     */
?>
<script>
    URL="Snake.php";
    document.location.href=URL;
</script>