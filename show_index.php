<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <img src="wallpaper.jpg"></img>
    <strong>Diary: </strong>
    <?php
        echo $_POST['name'];
    ?>
        <br>
        <?php
        echo $_POST['Date'];
    ?>
            <br>
            <?php
        echo $_POST['Diary'];
    ?>
                <br>
                <?php
        echo $_POST['Story'];
    ?>
</body>

</html>
