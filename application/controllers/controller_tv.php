<?php
class Controller_Tv extends Controller
{

    function __construct()
    {
        $this->model = new Model_Tv();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->getAllTv();
        $this->view->generate('tv.php', $data);
    }
}