<?php

define('JAXL_ERROR', 1);
define('JAXL_WARNING', 2);
define('JAXL_NOTICE', 3);
define('JAXL_INFO', 4);
define('JAXL_DEBUG', 5);

function _error($msg) { JAXLLogger::log($msg, JAXL_ERROR); }
function _warning($msg) { JAXLLogger::log($msg, JAXL_WARNING); }
function _notice($msg) { JAXLLogger::log($msg, JAXL_NOTICE); }
function _info($msg) { JAXLLogger::log($msg, JAXL_INFO); }
function _debug($msg) { JAXLLogger::log($msg, JAXL_DEBUG); }

class JAXLLogger {
	
	public static $level = JAXL_DEBUG;
	public static $path = null;
	
	public static function log($msg, $verbosity=1) {
		if($verbosity >= self::$level) {
			error_log($msg.PHP_EOL, 3, self::$path);
		}
	}
	
}

?>