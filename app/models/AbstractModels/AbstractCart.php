<?php

namespace AbstractModels;

abstract class AbstractCart extends \ModelBase
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
    public $user_id;

    /**
     *
     * @var string
     */
    public $session_id;

    /**
     *
     * @var integer
     */
    public $goods_id;

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
     * @var string
     */
    public $goods_name;

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
     * @var integer
     */
    public $goods_number;

    /**
     *
     * @var string
     */
    public $goods_attr;

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
    public $rec_type;

    /**
     *
     * @var integer
     */
    public $is_gift;

    /**
     *
     * @var integer
     */
    public $is_shipping;

    /**
     *
     * @var integer
     */
    public $can_handsel;

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
        return 'cart';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCart[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCart
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
            'user_id' => 'user_id',
            'session_id' => 'session_id',
            'goods_id' => 'goods_id',
            'goods_sn' => 'goods_sn',
            'product_id' => 'product_id',
            'goods_name' => 'goods_name',
            'market_price' => 'market_price',
            'goods_price' => 'goods_price',
            'goods_number' => 'goods_number',
            'goods_attr' => 'goods_attr',
            'is_real' => 'is_real',
            'extension_code' => 'extension_code',
            'parent_id' => 'parent_id',
            'rec_type' => 'rec_type',
            'is_gift' => 'is_gift',
            'is_shipping' => 'is_shipping',
            'can_handsel' => 'can_handsel',
            'goods_attr_id' => 'goods_attr_id'
        );
    }

}
