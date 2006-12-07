<?php
if (! defined('SIMPLE_TEST')) {
	define('SIMPLE_TEST', '../library/simpletest/');
}

require_once SIMPLE_TEST . 'unit_tester.php';
require_once SIMPLE_TEST . 'reporter.php';

class TestOfCampsommerBackend extends UnitTestCase {
	function __construct() {
		$this->UnitTestCase();
	}
	function testCreatingNewFile() {
		$this->assertTrue(true);
	}
}

$test = &new TestOfCampsommerBackend();
$test->run(new HtmlReporter());

require_once SIMPLE_TEST . 'web_tester.php';
require_once SIMPLE_TEST . 'reporter.php';

class TestOfCampsommerWeb extends WebTestCase {

    function setUp() {
        $this->get('http://localhost/Campsommer/public/index.php');
        $this->click('R�nde H�jskole');
    }

    function testSearchEngineOptimisations() {
        $this->assertTitle('Sommercamp � tre uger p� h�jskole');
        $this->assertPattern('/sommercamp/i');
        $this->assertPattern('/h�jskole/i');
    }
}
$test = &new TestOfCampsommerWeb();
$test->run(new HtmlReporter());
?>