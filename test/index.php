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
    	$this->click('R�nde H�jskole');
        $this->assertPattern('/sommercamp/i');
        $this->assertPattern('/h�jskole/i');
        $this->click('Vejle Idr�tsh�jskole');
        $this->assertPattern('/sommercamp/i');
        $this->assertPattern('/h�jskole/i');
        $this->click('Egaa Ungdomsh�jskole');
        $this->assertPattern('/sommercamp/i');
        $this->assertPattern('/h�jskole/i');

    }
}
$test = &new TestOfCampsommerWeb();
$test->run(new HtmlReporter());
?>