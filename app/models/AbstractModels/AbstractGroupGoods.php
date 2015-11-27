<?php

namespace AbstractModels;

abstract class AbstractGroupGoods extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $parent_id;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var double
     */
    public $goods_price;

    /**
     *
     * @var integer
     */
    public $admin_id;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'group_goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGroupGoods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGroupGoods
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
            'parent_id' => 'parent_id',
            'goods_id' => 'goods_id',
            'goods_price' => 'goods_price',
            'admin_id' => 'admin_id'
        );
    }

}
