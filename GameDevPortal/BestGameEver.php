<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'PhpGears/includes.php';?>
        <title>Best Game Ever</title>
        <meta name="description" content="Best Game Ever">
        <meta name="keywords" content="Game,BestGame, GTA, Mario, Andromeda">

    </head>
    <body>
        <div class="container">
            <header>
                <?php
                    include_once 'PhpGears/Header.php';
                    include_once 'PhpGears/BottomContentMenu.php';
                ?>
                <script>
                    document.getElementById("ContentLi").style.backgroundColor="#D3FFFE";
                    document.getElementById("BestGameEverLi").style.backgroundColor="#ff8c45";
                </script>
            </header>
            <main class="row no-gutters" id="MainContent">
                <?php include_once 'media/BestGameEverMedia.php';?>
            </main>

            <?php include_once 'PhpGears/footer.php';?>
        </div>
    </body>
</html>