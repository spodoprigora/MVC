<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.07.2016
 * Time: 17:17
 * главная страница
 */

class Controller_Main extends Controller{
    function action_index(){
        $this->view->generate('main_view.php', 'template_view.php');
    }
}