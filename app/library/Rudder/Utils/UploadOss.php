<?php

namespace Rudder\Utils {
	define('SCRIPT_ROOT',  dirname(dirname(__DIR__)) . '/oss');
	require_once SCRIPT_ROOT.'/sdk.class.php';
	class UploadOss {
		
		/**
		 * 上传文件到oss
		 * @param string $localPath
		 * @param string $ossPath 在oss上的路径：
		 * 	朋友圈	md5(member_id)/date('Y').date('m').date('d').'/'.pic.png
		 * 	个人资料	md5(member_id)/pic.png
		 * 
		 * 
		 */
		
		public static function upload($localPath,$ossPath) {
			$oss_sdk_service = new \ALIOSS();
			$oss_sdk_service->set_debug_mode(true);
			$bucket = BUCKET;
			$object = $ossPath;
			$file_path = $localPath;
			$response = $oss_sdk_service->upload_file_by_file($bucket,$object,$file_path);
			$header = $response->header;
			return $header['_info'] ;
		}
		
	}
}

