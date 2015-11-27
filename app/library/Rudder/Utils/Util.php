<?php

namespace Rudder\Utils {

	class Util {
		
		/**
		 * 获取随机字符串
		 * @param int $length
		 * @param string $chars
		 * @return string
		 */
		public static function random($length = 6, $chars = '0123456789') {
			$hash = '';
			$max = strlen($chars) - 1;
			for($i = 0; $i < $length; $i ++) {
				$hash .= $chars[mt_rand(0, $max)];
			}
			return $hash;
		}
	}
}

