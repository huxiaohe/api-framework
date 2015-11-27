<?php

namespace Rudder\Utils {
	
	/**
	 * 日志记录类
	 */
	class FileLog extends \Phalcon\Logger\Adapter\File {
		
		public function __construct($logfile, $options = null) {
			$name = self::createLog($logfile);
			parent::__construct($name, $options);
		}
		
		/**
		 * 创建日志文件
		 * @param string $logfile
		 */
		private static function createLog($logfile) {
			if(!defined('LOG_DIR')) {
				define('LOG_DIR', realpath('../logs').'/{date}');
			}
			$pathname = str_replace('{date}', date('Ymd'), LOG_DIR);
			if(!file_exists($pathname)) {
				@mkdir($pathname, 0777, true);
			}
			if(!is_string($logfile) || !$logfile) {
				$logfile = 'all.log';
			}
			
			return $pathname.'/'.$logfile;
		}
	}
	
}