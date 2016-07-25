<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.07.2016
 * Time: 16:26
 * bootstrap.php инициирует загрузку приложения,
 * подключая все необходимые модули и пр
 */

    require_once 'core/model.php';
    require_once 'core/view.php';
    require_once 'core/controller.php';
    require_once 'core/route.php';
    Route::start(); //запускаем маршрутизатор

