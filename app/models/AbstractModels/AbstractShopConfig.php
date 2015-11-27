<?php

namespace AbstractModels;

abstract class AbstractShopConfig extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $parent_id;

    /**
     *
     * @var string
     */
    public $code;

    /**
     *
     * @var string
     */
    public $type;

    /**
     *
     * @var string
     */
    public $store_range;

    /**
     *
     * @var string
     */
    public $store_dir;

    /**
     *
     * @var string
     */
    public $value;

    /**
     *
     * @var integer
     */
    public $sort_order;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'shop_config';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractShopConfig[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractShopConfig
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
            'id' => 'id',
            'parent_id' => 'parent_id',
            'code' => 'code',
            'type' => 'type',
            'store_range' => 'store_range',
            'store_dir' => 'store_dir',
            'value' => 'value',
            'sort_order' => 'sort_order'
        );
    }

}
