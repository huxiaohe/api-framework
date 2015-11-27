<?php

namespace AbstractModels;

abstract class AbstractGoodsType extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $cat_id;

    /**
     *
     * @var string
     */
    public $cat_name;

    /**
     *
     * @var integer
     */
    public $enabled;

    /**
     *
     * @var string
     */
    public $attr_group;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'goods_type';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGoodsType[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGoodsType
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
            'cat_id' => 'cat_id',
            'cat_name' => 'cat_name',
            'enabled' => 'enabled',
            'attr_group' => 'attr_group'
        );
    }

}
