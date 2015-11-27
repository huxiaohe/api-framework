<?php 

use Phalcon\Mvc\Model\Resultset\Simple as Resultset;

class ModelBase extends \Phalcon\Mvc\Model 
{
	
    /**
     * 
     * @param int $addrId
     * @return array
     */
    public static function findRow($parameters = null)
    {
        if(!$parameters)
        {
            return array();
        }
        $row = self::findFirst($parameters);
        if($row)
        {
            return $row->toArray();
        }
    }
    
    /**
     * 
     * @param string $sql
     * @return \Phalcon\Mvc\Model\Resultset\Simple
     */
    public function findByRawSql($sql) 
    {
    	return new Resultset($this->columnMap(), $this, $this->getReadConnection()->query($sql));
    }
    
    /**
     * Implement a method that returns a string key based
     * on the query parameters
     */
    public static function _createKey($parameters)
    {
    	$uniqueKey = array();
    	foreach ($parameters as $key => $value) {
    		if (is_scalar($value)) {
    			$uniqueKey[] = $key . ':' . $value;
    		} else {
    			if (is_array($value)) {
    				$uniqueKey[] = $key . ':[' . self::_createKey($value) .']';
    			}
    		}
    	}
    	return md5(join(',', $uniqueKey));
    }
    
}