<?php

namespace AbstractModels;

abstract class AbstractOrderAction extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $action_id;

    /**
     *
     * @var integer
     */
    public $order_id;

    /**
     *
     * @var string
     */
    public $action_user;

    /**
     *
     * @var integer
     */
    public $order_status;

    /**
     *
     * @var integer
     */
    public $shipping_status;

    /**
     *
     * @var integer
     */
    public $pay_status;

    /**
     *
     * @var integer
     */
    public $action_place;

    /**
     *
     * @var string
     */
    public $action_note;

    /**
     *
     * @var integer
     */
    public $log_time;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'order_action';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractOrderAction[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractOrderAction
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
            'action_id' => 'action_id',
            'order_id' => 'order_id',
            'action_user' => 'action_user',
            'order_status' => 'order_status',
            'shipping_status' => 'shipping_status',
            'pay_status' => 'pay_status',
            'action_place' => 'action_place',
            'action_note' => 'action_note',
            'log_time' => 'log_time'
        );
    }

}
