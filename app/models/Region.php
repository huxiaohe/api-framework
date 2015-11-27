<?php

use AbstractModels\AbstractRegion;
use Phalcon\Mvc\Model\Resultset;

class Region extends AbstractRegion {
	
	/**
	 * Independent Column Mapping.
	 * Keys are the real names in the table and the values their names in the application
	 *
	 * @return array
	 */
	public function columnMap()
	{
		return array(
			'region_id' => 'id',
			'parent_id' => 'parent_id',
			'region_name' => 'name',
			'region_type' => 'type',
			'agency_id' => 'agency_id'
		);
	}
	
	/**
	 * 获得城市列表
	 */
	public static function getCity()
	{
		$parameters = array();
		
		$parameters['conditions'] = 'type = 2';
		$parameters['columns'] = array('id, name');
		$parameters['hydration'] = ResultSet::HYDRATE_ARRAYS;
		$parameters['cache'] = array('lifetime' => 3600, 'key' => self::_createKey($parameters));
		
		return self::find($parameters)->toArray();
	}
	
}