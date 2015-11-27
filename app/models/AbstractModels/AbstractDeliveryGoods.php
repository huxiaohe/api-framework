<?php

namespace AbstractModels;

abstract class AbstractDeliveryGoods extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $rec_id;

    /**
     *
     * @var integer
     */
    public $delivery_id;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var integer
     */
    public $product_id;

    /**
     *
     * @var string
     */
    public $product_sn;

    /**
     *
     * @var string
     */
    public $goods_name;

    /**
     *
     * @var string
     */
    public $brand_name;

    /**
     *
     * @var string
     */
    public $goods_sn;

    /**
     *
     * @var integer
     */
    public $is_real;

    /**
     *
     * @var string
     */
    public $extension_code;

    /**
     *
     * @var integer
     */
    public $parent_id;

    /**
     *
     * @var integer
     */
    public $send_number;

    /**
     *
     * @var string
     */
    public $goods_attr;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'delivery_goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractDeliveryGoods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractDeliveryGoods
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
            'rec_id' => 'rec_id',
            'delivery_id' => 'delivery_id',
            'goods_id' => 'goods_id',
            'product_id' => 'product_id',
            'product_sn' => 'product_sn',
            'goods_name' => 'goods_name',
            'brand_name' => 'brand_name',
            'goods_sn' => 'goods_sn',
            'is_real' => 'is_real',
            'extension_code' => 'extension_code',
            'parent_id' => 'parent_id',
            'send_number' => 'send_number',
            'goods_attr' => 'goods_attr'
        );
    }

}
