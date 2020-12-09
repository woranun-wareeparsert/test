<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Form Post Demo</title>
    </head>
    <body>
    <strong>Diary: </strong>
    <?php
        echo $_POST['title'];
        <br>
        echo $_POST['text'];
    ?>
    </body>
</html>
