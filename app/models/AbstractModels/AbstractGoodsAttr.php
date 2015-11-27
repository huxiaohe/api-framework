<?php

namespace AbstractModels;

abstract class AbstractGoodsAttr extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $goods_attr_id;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var integer
     */
    public $attr_id;

    /**
     *
     * @var string
     */
    public $attr_value;

    /**
     *
     * @var string
     */
    public $attr_price;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'goods_attr';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGoodsAttr[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGoodsAttr
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
            'goods_attr_id' => 'goods_attr_id',
            'goods_id' => 'goods_id',
            'attr_id' => 'attr_id',
            'attr_value' => 'attr_value',
            'attr_price' => 'attr_price'
        );
    }

}
