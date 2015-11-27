<?php

namespace AbstractModels;

abstract class AbstractPackageGoods extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $package_id;

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
     * @var integer
     */
    public $goods_number;

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
        return 'package_goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractPackageGoods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractPackageGoods
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
            'package_id' => 'package_id',
            'goods_id' => 'goods_id',
            'product_id' => 'product_id',
            'goods_number' => 'goods_number',
            'admin_id' => 'admin_id'
        );
    }

}
