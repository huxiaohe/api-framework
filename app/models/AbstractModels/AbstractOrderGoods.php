<?php

namespace AbstractModels;

abstract class AbstractOrderGoods extends \ModelBase
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
    public $order_id;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var string
     */
    public $goods_name;

    /**
     *
     * @var string
     */
    public $goods_sn;

    /**
     *
     * @var integer
     */
    public $product_id;

    /**
     *
     * @var integer
     */
    public $goods_number;

    /**
     *
     * @var double
     */
    public $market_price;

    /**
     *
     * @var double
     */
    public $goods_price;

    /**
     *
     * @var string
     */
    public $goods_attr;

    /**
     *
     * @var integer
     */
    public $send_number;

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
    public $is_gift;

    /**
     *
     * @var string
     */
    public $goods_attr_id;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'order_goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractOrderGoods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractOrderGoods
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
            'order_id' => 'order_id',
            'goods_id' => 'goods_id',
            'goods_name' => 'goods_name',
            'goods_sn' => 'goods_sn',
            'product_id' => 'product_id',
            'goods_number' => 'goods_number',
            'market_price' => 'market_price',
            'goods_price' => 'goods_price',
            'goods_attr' => 'goods_attr',
            'send_number' => 'send_number',
            'is_real' => 'is_real',
            'extension_code' => 'extension_code',
            'parent_id' => 'parent_id',
            'is_gift' => 'is_gift',
            'goods_attr_id' => 'goods_attr_id'
        );
    }

}
