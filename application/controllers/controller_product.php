<?php
class Controller_Product extends Controller
{
    function __construct($id)
    {
        $this->model = new Model_Product($id);
        $this->view = new View();
    }


    function action_index()
    {
        $data = $this->model->getDataById();
        $this->view->generate('product.php', $data);
    }

}