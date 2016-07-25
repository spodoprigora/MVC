<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.07.2016
 * Time: 17:08
 * базовый клас представления
 */
class View
{
    public $Year;
    public $Site;
    public $DEscription;
    //public $template_view; // здесь можно указать общий вид по умолчанию.
    function generate($content_view, $template_view, $data = null){
        if(is_array($data)){
            //преобразуем элементы массива в переменные
            $count = extract($data);
        }

        include 'application/views/' . $template_view;
    }

}