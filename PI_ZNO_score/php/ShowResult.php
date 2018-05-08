<?php
    require_once 'variables.php';
    $dbc=mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DATABASE);
    $query="SELECT *  FROM test_results WHERE approved=1 ORDER BY score DESC";//запрашиваем данные в порядке спадания рейтинга
    $result=mysqli_query($dbc,$query);
    $j=1;
    echo "<table>
        <tr>
            <td><h4>№</h4></td>
            <td><h4>name</h4></td>
            <td><h4>score</h4></td>
        </tr>";
    while ($row= mysqli_fetch_array($result)){//выводи их все в таблице
        $name=$row['name'];
        $score=$row['score'];
        echo <<<_END
            <tr>
                <td><h5>$j</h5></td>
                <td><h5>$name</h5></td>
                <td><h5>$score</h5></td>
            </tr>
_END;
        $j++;
    }
    echo "</table>";

    mysqli_close($dbc);

?>