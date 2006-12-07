<?php
if (! defined('SIMPLE_TEST')) {
	define('SIMPLE_TEST', '../library/simpletest/');
}

require_once SIMPLE_TEST . 'web_tester.php';
require_once SIMPLE_TEST . 'reporter.php';

class TestIntrafaceWeb extends WebTestCase {

    function testLogin() {
		//$this->setMaximumRedirects(0);
		$this->assertTrue($this->get('http://www.intraface.dk/main/login.php'));
		$this->assertField('email', '');
		$this->assertField('password', '');
		$this->assertTrue($this->setField('email', 'lars@legestue.net'));
		$this->assertTrue($this->setField('password', 'klaniklani'));
		$this->assertTrue($this->click('Login'));
		$this->setMaximumRedirects(0);
		$this->assertTrue($this->get('http://www.intraface.dk/main/index.php'));

    }

}
$test = &new TestIntrafaceWeb();
$test->run(new HtmlReporter());
?>