<?php
/* Upload Test cases generated on: 2014-06-24 14:10:52 : 1403644252*/
App::import('Model', 'Upload');

class UploadTestCase extends CakeTestCase {
	var $fixtures = array('app.upload', 'app.user', 'app.uploads_user');

	function startTest() {
		$this->Upload =& ClassRegistry::init('Upload');
	}

	function endTest() {
		unset($this->Upload);
		ClassRegistry::flush();
	}

}
