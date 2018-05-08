<?php
    require_once 'variables.php';
    $dbc=mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DATABASE);
    $query="SELECT *  FROM test_results";//запрашиваем данные в порядке спадания рейтинга
    $result=mysqli_query($dbc,$query);
    //выводим шапку таблицы
    echo "<table>
        <tr>
            <td><h4>_id</h4></td>
            <td><h4>email</h4></td>
            <td><h4>name</h4></td>
            <td><h4>score</h4></td>
            <td></td>
            <td></td>
        </tr>
        ";
    while ($row= mysqli_fetch_array($result)){//выводи их все в таблице
        $id=$row['_id'];
        $name=$row['name'];
        $email=$row['email'];
        $approved=$row['approved'];
        $score=$row['score'];
        echo "<tr>
                <td><h5>$id</h5></td>
                <td><h5>$email</h5></td>
                <td><h5>$name</h5></td>
                <td><h5>$score</h5></td>
                <td><a href='php/DeletePage.php?id=$id&amp;doing=delete'><h5>delete</h5></a> </td>";
        if (!$approved) {//если еще не одобрено
            echo "<td ><a href ='php/DeletePage.php?id=$id&amp;doing=approve'> <h5>approve</h5></a > </td >";
        }
        else{
            echo "<td></td>";
        }
        echo "</tr>";
    }
    mysqli_close($dbc);
    echo "</table><a href='php/DeletePage.php?doing=approve_all'><h5 align='right'>approve all</h5></a>";
?>