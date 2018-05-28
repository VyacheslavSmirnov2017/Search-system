<?php
class Controller_Delivery extends Controller
{

    function action_index()
    {
        $this->view->generate('delivery.php');
    }

}