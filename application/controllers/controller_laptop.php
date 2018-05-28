<?php
class Controller_Laptop extends Controller
{

    function __construct()
    {
        $this->model = new Model_Laptop();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->getAllLaptop();
        $this->view->generate('laptop.php', $data);
    }
}