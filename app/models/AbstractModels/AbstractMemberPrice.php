<?php

namespace AbstractModels;

abstract class AbstractMemberPrice extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $price_id;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var integer
     */
    public $user_rank;

    /**
     *
     * @var double
     */
    public $user_price;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'member_price';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractMemberPrice[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractMemberPrice
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
            'price_id' => 'price_id',
            'goods_id' => 'goods_id',
            'user_rank' => 'user_rank',
            'user_price' => 'user_price'
        );
    }

}
