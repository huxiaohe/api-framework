<?php

namespace AbstractModels;

abstract class AbstractAffiliateLog extends \ModelBase
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
    public $order_id;

    /**
     *
     * @var integer
     */
    public $time;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $user_name;

    /**
     *
     * @var double
     */
    public $money;

    /**
     *
     * @var integer
     */
    public $point;

    /**
     *
     * @var integer
     */
    public $separate_type;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'affiliate_log';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAffiliateLog[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAffiliateLog
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
            'order_id' => 'order_id',
            'time' => 'time',
            'user_id' => 'user_id',
            'user_name' => 'user_name',
            'money' => 'money',
            'point' => 'point',
            'separate_type' => 'separate_type'
        );
    }

}
