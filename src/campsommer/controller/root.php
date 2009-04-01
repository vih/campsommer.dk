<?php
class Campsommer_Controller_Root extends k_Dispatcher
{
    public $map = array('index'            => 'Campsommer_Controller_Index',
                        'vih-sommercamp'   => 'Campsommer_Controller_VIH',
                        'euh-sommercamp'   => 'Campsommer_Controller_EUH',
                        'ronde-sommercamp' => 'Campsommer_Controller_Ronde',
                        'faq'              => 'Campsommer_Controller_Faq');

    public $i18n = array('index'            => 'Sommercamp',
                         'euh-sommercamp'   => 'Egå Højskole',
                         'vih-sommercamp'   => 'Vejle Idrætshøjskole',
                         'ronde-sommercamp' => 'Rønde Højskole',
                         'faq'              => 'FAQ');

    function __construct()
    {
        parent::__construct();
        $this->document->template = dirname(__FILE__) . '/../templates/main.tpl.php';
        $pics = array($this->url('/gfx/images/horisontal-boldspil-logo.jpg'),
                      $this->url('/gfx/images/horisontal-studiegruppe-logo.jpg'),
                      $this->url('/gfx/images/horisontal-klatrer-logo.jpg'),
                      $this->url('/gfx/images/horisontal-jumping-logo.jpg'));
        $this->document->pic = $pic = $pics[array_rand($pics)];
        $this->document->title = 'Sommercamp - campsommer.dk';
        $this->document->keywords = 'sommercamp';
        $this->document->description = 'sommercamp';
        $this->document->body_attributes = '';
        $this->document->scripts[] = $this->url('/scripts/nifty.js');
    }

    function execute()
    {
        return $this->forward('index');
    }

    function forward($name)
    {
        $next = new $this->map[$name]($this, $name);
        return $next->handleRequest();
    }
}