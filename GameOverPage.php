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
?>
<script>
    URL="Snake.php";
    document.location.href=URL;
</script>