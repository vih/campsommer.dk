<?php
class Campsommer_Controller_Index extends k_Controller
{
    function GET()
    {
        $this->document->title       = 'Sommercamp - 3 ugers h�jskole';
        $this->document->keywords    = 'sommercamp, h�jskole';
        $this->document->description = 'Sommercamp - 3 ugers h�jskole';
        return $this->render(dirname(__FILE__) . '/../templates/index.tpl.php');
    }
}