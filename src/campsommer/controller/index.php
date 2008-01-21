<?php
class Campsommer_Controller_Index extends k_Controller
{
    function GET()
    {
        return $this->render(dirname(__FILE__) . '/../templates/index.tpl.php');
    }
}