<div class="row no-gutters" id="HeaderTop">
    <div class="col-8 no-gutters">
        <H2>GameDev</H2>
    </div>
    <div class="col-4 no-gutters" id="TopMenu">
        <ul>
            <nav>
                <a href="BestGameEver.php"><li id="ContentLi">Content</li></a>
                <a href="Snake.php"><li id="GameLi">Game</li></a>
                    <?php
                    if (isset($_COOKIE['name']) && isset($_COOKIE['_id']))
                        echo "<a href=\"LogOut.php\"><li>logout</li></a>";
                    else
                        echo "<a href=\"Snake.php\"><li>login</li></a>";
                    ?>
            </nav>

        </ul>
    </div>
</div>
<div class="row no-gutters">
    <div class="col-12">
        <img src="img/SkyBg.jpg" usemap="#fucking_map">
        <map name="fucking_map">
            <area shape="poly" coords="382,82, 395,196, 364, 196" href="LogOut.php" alt="log(out/in)">
            <area shape="poly" coords="27,62, 58,68, 57,186, 26, 190" href="BestGameEver.php" alt="BestGameEver">
            <area shape="poly" coords="800,40, 830,40, 830,70, 800,70" href="" onclick="alert('Do not click here!')" alt="BestGameEver">
        </map>
    </div>
</div>