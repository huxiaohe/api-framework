<?php

namespace AbstractModels;

abstract class AbstractVirtualCard extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $card_id;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var string
     */
    public $card_sn;

    /**
     *
     * @var string
     */
    public $card_password;

    /**
     *
     * @var integer
     */
    public $add_date;

    /**
     *
     * @var integer
     */
    public $end_date;

    /**
     *
     * @var integer
     */
    public $is_saled;

    /**
     *
     * @var string
     */
    public $order_sn;

    /**
     *
     * @var string
     */
    public $crc32;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'virtual_card';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractVirtualCard[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractVirtualCard
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
            'card_id' => 'card_id',
            'goods_id' => 'goods_id',
            'card_sn' => 'card_sn',
            'card_password' => 'card_password',
            'add_date' => 'add_date',
            'end_date' => 'end_date',
            'is_saled' => 'is_saled',
            'order_sn' => 'order_sn',
            'crc32' => 'crc32'
        );
    }

}
