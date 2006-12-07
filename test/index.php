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
        $this->click('Rønde Højskole');
    }

    function testSearchEngineOptimisations() {
        $this->assertTitle('Sommercamp – tre uger på højskole');
        $this->assertPattern('/sommercamp/i');
        $this->assertPattern('/højskole/i');
    }
}
$test = &new TestOfCampsommerWeb();
$test->run(new HtmlReporter());
?>