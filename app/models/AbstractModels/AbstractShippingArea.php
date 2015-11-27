<?php

namespace AbstractModels;

abstract class AbstractShippingArea extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $shipping_area_id;

    /**
     *
     * @var string
     */
    public $shipping_area_name;

    /**
     *
     * @var integer
     */
    public $shipping_id;

    /**
     *
     * @var string
     */
    public $configure;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'shipping_area';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractShippingArea[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractShippingArea
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
            'shipping_area_id' => 'shipping_area_id',
            'shipping_area_name' => 'shipping_area_name',
            'shipping_id' => 'shipping_id',
            'configure' => 'configure'
        );
    }

}
