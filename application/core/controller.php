<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.07.2016
 * Time: 17:13
 * базовое представление контроллера
 */
class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }
    function action_index(){
        
    }

}