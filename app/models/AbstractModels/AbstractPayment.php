<?php

namespace AbstractModels;

abstract class AbstractPayment extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $pay_id;

    /**
     *
     * @var string
     */
    public $pay_code;

    /**
     *
     * @var string
     */
    public $pay_name;

    /**
     *
     * @var string
     */
    public $pay_fee;

    /**
     *
     * @var string
     */
    public $pay_desc;

    /**
     *
     * @var integer
     */
    public $pay_order;

    /**
     *
     * @var string
     */
    public $pay_config;

    /**
     *
     * @var integer
     */
    public $enabled;

    /**
     *
     * @var integer
     */
    public $is_cod;

    /**
     *
     * @var integer
     */
    public $is_online;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'payment';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractPayment[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractPayment
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
            'pay_id' => 'pay_id',
            'pay_code' => 'pay_code',
            'pay_name' => 'pay_name',
            'pay_fee' => 'pay_fee',
            'pay_desc' => 'pay_desc',
            'pay_order' => 'pay_order',
            'pay_config' => 'pay_config',
            'enabled' => 'enabled',
            'is_cod' => 'is_cod',
            'is_online' => 'is_online'
        );
    }

}
