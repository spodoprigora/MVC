<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.07.2016
 * Time: 17:19
 * шаблон с общей разметкой
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/main.css" />
        <script src="/js/main.js"></script>
        <title>Главная</title>
    </head>
    <body>
        <?php
            include 'application/views/' . $content_view;
        ?>
    </body>
</html>
