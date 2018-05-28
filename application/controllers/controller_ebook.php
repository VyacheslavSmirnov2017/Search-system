<?php
class Controller_Ebook extends Controller
{

    function __construct()
    {
        $this->model = new Model_Ebook();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->getAllEbook();
        $this->view->generate('ebook.php', $data);
    }

}