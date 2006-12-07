<?php
/**
 * The question is how we can setup automated tests
 * to test our API? Setting up the tests requires
 * that we login - and logging in requires that
 * there is a standard way to login.
 */

if (! defined('SIMPLE_TEST')) {
	define('SIMPLE_TEST', '../library/simpletest/');
}

require_once SIMPLE_TEST . 'web_tester.php';
require_once SIMPLE_TEST . 'reporter.php';

/**
 * This test file should have tests for
 * - subscribe
 * - unsubscribe
 * - optin
 * - the e-mail sent
 */

class TestNewsletterAPI extends WebTestCase {

    function testFile() {
		$this->assertTrue($this->get('http://www.intraface.dk/xmlrpc/newsletter/NewsletterServer.php'));
    }

}
$test = &new TestNewsletterAPI();
$test->run(new HtmlReporter());
?>