<?php

namespace AbstractModels;

abstract class AbstractLinkGoods extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var integer
     */
    public $link_goods_id;

    /**
     *
     * @var integer
     */
    public $is_double;

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
        return 'link_goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractLinkGoods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractLinkGoods
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
            'goods_id' => 'goods_id',
            'link_goods_id' => 'link_goods_id',
            'is_double' => 'is_double',
            'admin_id' => 'admin_id'
        );
    }

}
