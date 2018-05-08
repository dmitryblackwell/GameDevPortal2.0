<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'PhpGears/includes.php';?>
    <title>Show result</title>
    <meta name="description" content="Show result">
    <meta name="keywords" content="score, game, result">

</head>
<body>
<div class="container">
    <header>
        <?php
        include_once 'PhpGears/Header.php';
        include_once 'PhpGears/BottomGameMenu.php';
        ?>
        <script>
            document.getElementById("GameLi").style.backgroundColor="#FFFFFF";
            document.getElementById("ShowResultLi").style.backgroundColor="#ff8c45";
        </script>
    </header>
    <main class="row no-gutters" id="MainContent">
        <?php
            require_once 'PhpScripts/logins.php';
            $dbc = mysqli_connect($hn,$un,$pw,$db);
            $query = "SELECT name,score FROM ScoreList WHERE score>0 ORDER BY score DESC";
            $result = mysqli_query($dbc,$query);
            echo "<table id='ScoreTable'>
                            <tr>
                                <td><h4><b>Name</b></h4></td>
                                <td><h4><b>Score</b></h4></td>
                            </tr>
                          ";
            $i=0;
            while ($row=mysqli_fetch_array($result)){
                $name=$row['name'];
                $score=$row['score'];
                echo " <tr>
                                <td><h4>$name</h4></td>
                                <td><h4>$score</h4></td>
                            </tr>";
                $i++;
            }
            echo "</table>";
        ?>
    </main>

    <?php include_once 'PhpGears/footer.php';?>

</div>
</body>
</html>
