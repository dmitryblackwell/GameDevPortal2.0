<?php require_once 'autentification.php'; ?>
<style>
    #DeleteDiv{
        margin: auto;
        margin-top: 20%;
        width: 400px;
    }
    body{
        background-color: black;
    }
    p{
        font-size: 1.2em;
        vertical-align: bottom;
        color: white;
    }
    input{
        background: black;
        color: white;
        width: 100px;
    }
</style>
<div id="DeleteDiv">
    <?php
        require_once 'variables.php';
        if (isset($_GET['id']) && isset($_GET['doing'])){//id и что сделать с этим человеком удалить или одобрить
            $id=hack_save($_GET['id']);//получаем id
            $doing=hack_save($_GET['doing']);//и действие
            $dbc=mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DATABASE);
            $query="SELECT * FROM test_results WHERE _id='$id'";
            $result=mysqli_query($dbc,$query);//получаем все данные из бд на этого  человека или девушку
            if ($doing == 'delete') {//выводим уточнающий вопрос в зависимости ои действия
                echo "<p>Are you sure you want to delete " . mysqli_fetch_array($result)['name'] . " from database?</p>";
            }
            elseif ($doing == 'approve') {
                echo "<p>Are you sure you want to approve ".mysqli_fetch_array($result)['name']." ?</p>";
            }
            $this_file_name=$_SERVER['PHP_SELF'];//выводим копку да и несколько скрытых полей для передачи инфы
            echo "<form method='get' action='$this_file_name' align='center'> <input type='hidden' name='id' value='$id'><input type='hidden' name='doing' value='$doing'> <input type='submit' name='delete_submit' value='yes'> </form>";
            mysqli_close($dbc);
        }
        if (isset($_GET['doing']) && hack_save($_GET['doing']) == 'approve_all'){//если была нажата кнопка одобрить всех
            $dbc = mysqli_connect(HOST_NAME, USER_NAME, PASSWORD, DATABASE);
            $query = "UPDATE test_results SET approved=1";
            $result = mysqli_query($dbc, $query);
            echo "<h1>Done</h1>";
            mysqli_close($dbc);
        }
        if (isset($_GET['delete_submit'])){//подтверждение формы
            $id=$_GET['id'];
            $doing=hack_save($_GET['doing']);
            $dbc=mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DATABASE);
            if ($doing == 'delete') {//действие с бд в зависимости от действия
                $query="DELETE FROM test_results WHERE _id='$id'";
            }
            elseif ($doing == 'approve') {
                $query="UPDATE test_results SET approved=1 WHERE _id='$id'";
            }
            $result=mysqli_query($dbc,$query);
            echo "<p>Done</p>";
            mysqli_close($dbc);
    ?>
        <script type='text/javascript'>
            window.location = '../admin.php';
        </script>
    <?php }?>

</div>