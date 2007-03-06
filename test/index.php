<?php
if (! defined('SIMPLE_TEST')) {
	define('SIMPLE_TEST', '../library/simpletest/');
}

require_once SIMPLE_TEST . 'unit_tester.php';
require_once SIMPLE_TEST . 'reporter.php';
require_once SIMPLE_TEST . 'web_tester.php';

class TestOfCampsommerWeb extends WebTestCase {

    function setUp() {
        $this->get('http://localhost/Campsommer/public/index.php');
    }

    function testSearchEngineOptimisations() {
    	$this->click('Rønde Højskole');
        $this->assertPattern('/sommercamp/i');
        $this->assertPattern('/højskole/i');
        $this->click('Vejle Idrætshøjskole');
        $this->assertPattern('/sommercamp/i');
        $this->assertPattern('/højskole/i');
        $this->click('Egaa Ungdomshøjskole');
        $this->assertPattern('/sommercamp/i');
        $this->assertPattern('/højskole/i');

    }
}
$test = &new TestOfCampsommerWeb();
$test->run(new HtmlReporter());
?>