<?php
class Controller_Payment extends Controller
{

    function action_index()
    {
        $this->view->generate('payment.php');
    }

}