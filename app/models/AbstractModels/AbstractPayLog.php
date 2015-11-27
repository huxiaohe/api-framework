<?php

namespace AbstractModels;

abstract class AbstractPayLog extends \ModelBase
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
     * @var double
     */
    public $order_amount;

    /**
     *
     * @var integer
     */
    public $order_type;

    /**
     *
     * @var integer
     */
    public $is_paid;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pay_log';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractPayLog[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractPayLog
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
            'order_amount' => 'order_amount',
            'order_type' => 'order_type',
            'is_paid' => 'is_paid'
        );
    }

}
