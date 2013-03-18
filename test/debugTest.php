<?php
require_once(dirname(__DIR__).'/test_common.php');
ld('/func/debug');

class FuncDebugTest extends PHPUNIT_Framework_TestCase {

	public function testDebugDump(){
		ob_end_flush();
		ob_start();
		debug_dump(false,true,3,5,'this is a string');
		$out = trim(ob_get_contents());
		ob_clean();
		$this->assertEquals('5447a8b60d5bc9667e6be2040be3f5b786fcc99b',sha1($out));
	}

}
