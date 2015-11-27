<?php

namespace AbstractModels;

abstract class AbstractProducts extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $product_id;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var string
     */
    public $goods_attr;

    /**
     *
     * @var string
     */
    public $product_sn;

    /**
     *
     * @var integer
     */
    public $product_number;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'products';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractProducts[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractProducts
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
            'product_id' => 'product_id',
            'goods_id' => 'goods_id',
            'goods_attr' => 'goods_attr',
            'product_sn' => 'product_sn',
            'product_number' => 'product_number'
        );
    }

}
