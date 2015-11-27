<?php

namespace AbstractModels;

abstract class AbstractBonusType extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $type_id;

    /**
     *
     * @var string
     */
    public $type_name;

    /**
     *
     * @var double
     */
    public $type_money;

    /**
     *
     * @var integer
     */
    public $send_type;

    /**
     *
     * @var double
     */
    public $min_amount;

    /**
     *
     * @var double
     */
    public $max_amount;

    /**
     *
     * @var integer
     */
    public $send_start_date;

    /**
     *
     * @var integer
     */
    public $send_end_date;

    /**
     *
     * @var integer
     */
    public $use_start_date;

    /**
     *
     * @var integer
     */
    public $use_end_date;

    /**
     *
     * @var double
     */
    public $min_goods_amount;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'bonus_type';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractBonusType[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractBonusType
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
            'type_id' => 'type_id',
            'type_name' => 'type_name',
            'type_money' => 'type_money',
            'send_type' => 'send_type',
            'min_amount' => 'min_amount',
            'max_amount' => 'max_amount',
            'send_start_date' => 'send_start_date',
            'send_end_date' => 'send_end_date',
            'use_start_date' => 'use_start_date',
            'use_end_date' => 'use_end_date',
            'min_goods_amount' => 'min_goods_amount'
        );
    }

}
