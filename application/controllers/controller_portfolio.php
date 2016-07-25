<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.07.2016
 * Time: 17:17
 */

class Controller_Portfolio extends Controller{
    function __construct()
    {
        $this->model=new Model_Portfolio();
        $this->view = new View();
    }

    function action_index(){
        $data = $this->model->get_data();
        $this->view->generate('portfolio_view.php', 'template_view.php', $data);
        
    }
}