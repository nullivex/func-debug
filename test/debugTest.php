<?php
/**
 *  OpenLSS - Lighter Smarter Simpler
 *
 *	This file is part of OpenLSS.
 *
 *	OpenLSS is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Lesser General Public License as
 *	published by the Free Software Foundation, either version 3 of
 *	the License, or (at your option) any later version.
 *
 *	OpenLSS is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Lesser General Public License for more details.
 *
 *	You should have received a copy of the 
 *	GNU Lesser General Public License along with OpenLSS.
 *	If not, see <http://www.gnu.org/licenses/>.
*/
require_once(dirname(__DIR__).'/vendor/autoload.php');
require_once('lss_boot.php');

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
