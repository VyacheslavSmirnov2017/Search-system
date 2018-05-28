<?php
class Controller_Phone extends Controller
{
    function __construct()
    {
        $this->model = new Model_Phone();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->getAllPhone();
        $this->view->generate('phone.php', $data);
    }

}