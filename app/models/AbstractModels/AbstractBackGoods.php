<?php

namespace AbstractModels;

abstract class AbstractBackGoods extends \ModelBase
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
    public $back_id;

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
        return 'back_goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractBackGoods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractBackGoods
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
            'back_id' => 'back_id',
            'goods_id' => 'goods_id',
            'product_id' => 'product_id',
            'product_sn' => 'product_sn',
            'goods_name' => 'goods_name',
            'brand_name' => 'brand_name',
            'goods_sn' => 'goods_sn',
            'is_real' => 'is_real',
            'send_number' => 'send_number',
            'goods_attr' => 'goods_attr'
        );
    }

}
