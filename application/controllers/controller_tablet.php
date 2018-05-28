<?php
class Controller_Tablet extends Controller
{

    function __construct()
    {
        $this->model = new Model_Tablet();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->getAllTablet();
        $this->view->generate('tablet.php', $data);
    }

}