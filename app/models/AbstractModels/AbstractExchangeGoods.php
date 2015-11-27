<?php

namespace AbstractModels;

abstract class AbstractExchangeGoods extends \ModelBase
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
    public $exchange_integral;

    /**
     *
     * @var integer
     */
    public $is_exchange;

    /**
     *
     * @var integer
     */
    public $is_hot;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'exchange_goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractExchangeGoods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractExchangeGoods
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
            'exchange_integral' => 'exchange_integral',
            'is_exchange' => 'is_exchange',
            'is_hot' => 'is_hot'
        );
    }

}
