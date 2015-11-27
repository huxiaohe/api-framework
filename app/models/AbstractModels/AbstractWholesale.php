<?php

namespace AbstractModels;

abstract class AbstractWholesale extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $act_id;

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
    public $rank_ids;

    /**
     *
     * @var string
     */
    public $prices;

    /**
     *
     * @var integer
     */
    public $enabled;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'wholesale';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractWholesale[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractWholesale
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
            'act_id' => 'act_id',
            'goods_id' => 'goods_id',
            'goods_name' => 'goods_name',
            'rank_ids' => 'rank_ids',
            'prices' => 'prices',
            'enabled' => 'enabled'
        );
    }

}
