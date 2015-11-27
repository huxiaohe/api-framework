<?php

namespace AbstractModels;

abstract class AbstractAdminLog extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $log_id;

    /**
     *
     * @var integer
     */
    public $log_time;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $log_info;

    /**
     *
     * @var string
     */
    public $ip_address;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'admin_log';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdminLog[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdminLog
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'log_id' => 'log_id',
            'log_time' => 'log_time',
            'user_id' => 'user_id',
            'log_info' => 'log_info',
            'ip_address' => 'ip_address'
        );
    }

}
