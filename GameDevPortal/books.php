<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'PhpGears/includes.php';?>
    <title>Books</title>
    <meta name="description" content="Books">
    <meta name="keywords" content="books, gamedev, coding">

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
            document.getElementById("BooksLi").style.backgroundColor="#ff8c45";
        </script>
    </header>
    <main class="row no-gutters" id="MainContent">
        <table id="ScoreTable" style="margin: 20px"><tr>
                <th>title</th>
                <th>author</th>
                <th>year</th>
                <th>price</th>
            </tr>
        <?php
            $xml=simplexml_load_file("media/books.xml") or die("Error: Cannot create object");
            for ($i=0;$i<4;$i++){
                echo "<tr>";
                echo "<td>".$xml->book[$i]->title . "</td>"."<td>".$xml->book[$i]->author."</td>"."<td>".$xml->book[$i]->year."</td>"."<td>".$xml->book[$i]->price."</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </main>

    <?php include_once 'PhpGears/footer.php';?>

</div>
</body>
</html>