<?php require 'php/autentification.php'?>
<html>
<head>
    <title>Admin page</title>
    <?php include_once 'gears/links.php' ?>
    <style>.li_admin{background: #333;}</style>
</head>
<body>
<div id="wrap" class="container">
    <?php include_once 'gears/header.php' ?>
    <div id="content" class="column span-15 last">
        <h3>Student's results</h3>
        <?php include_once 'php/AdminScript.php'; ?>
    </div>

    <?php include_once 'gears/sidebar.php' ?>
</div>
<?php include_once 'gears/footer.php' ?>
</body>
</html>