<?php

namespace AbstractModels;

abstract class AbstractShipping extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $shipping_id;

    /**
     *
     * @var string
     */
    public $shipping_code;

    /**
     *
     * @var string
     */
    public $shipping_name;

    /**
     *
     * @var string
     */
    public $shipping_desc;

    /**
     *
     * @var string
     */
    public $insure;

    /**
     *
     * @var integer
     */
    public $support_cod;

    /**
     *
     * @var integer
     */
    public $enabled;

    /**
     *
     * @var string
     */
    public $shipping_print;

    /**
     *
     * @var string
     */
    public $print_bg;

    /**
     *
     * @var string
     */
    public $config_lable;

    /**
     *
     * @var integer
     */
    public $print_model;

    /**
     *
     * @var integer
     */
    public $shipping_order;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'shipping';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractShipping[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractShipping
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
            'shipping_id' => 'shipping_id',
            'shipping_code' => 'shipping_code',
            'shipping_name' => 'shipping_name',
            'shipping_desc' => 'shipping_desc',
            'insure' => 'insure',
            'support_cod' => 'support_cod',
            'enabled' => 'enabled',
            'shipping_print' => 'shipping_print',
            'print_bg' => 'print_bg',
            'config_lable' => 'config_lable',
            'print_model' => 'print_model',
            'shipping_order' => 'shipping_order'
        );
    }

}
