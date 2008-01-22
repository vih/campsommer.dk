<?php
class Campsommer_Controller_Index extends k_Controller
{
    function GET()
    {
        $this->document->title       = 'Sommercamp - 3 ugers højskole';
        $this->document->keywords    = 'sommercamp, højskole';
        $this->document->description = 'Sommercamp - 3 ugers højskole';
        return $this->render(dirname(__FILE__) . '/../templates/index.tpl.php');
    }
}