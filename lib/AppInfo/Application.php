<?php

namespace OCA\Userbook\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'userbook';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
