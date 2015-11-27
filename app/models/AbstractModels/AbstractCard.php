<?php

namespace AbstractModels;

abstract class AbstractCard extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $card_id;

    /**
     *
     * @var string
     */
    public $card_name;

    /**
     *
     * @var string
     */
    public $card_img;

    /**
     *
     * @var double
     */
    public $card_fee;

    /**
     *
     * @var double
     */
    public $free_money;

    /**
     *
     * @var string
     */
    public $card_desc;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'card';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCard[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCard
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
            'card_name' => 'card_name',
            'card_img' => 'card_img',
            'card_fee' => 'card_fee',
            'free_money' => 'free_money',
            'card_desc' => 'card_desc'
        );
    }

}
