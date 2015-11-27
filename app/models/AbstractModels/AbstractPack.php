<?php

namespace AbstractModels;

abstract class AbstractPack extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $pack_id;

    /**
     *
     * @var string
     */
    public $pack_name;

    /**
     *
     * @var string
     */
    public $pack_img;

    /**
     *
     * @var double
     */
    public $pack_fee;

    /**
     *
     * @var integer
     */
    public $free_money;

    /**
     *
     * @var string
     */
    public $pack_desc;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pack';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractPack[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractPack
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
            'pack_id' => 'pack_id',
            'pack_name' => 'pack_name',
            'pack_img' => 'pack_img',
            'pack_fee' => 'pack_fee',
            'free_money' => 'free_money',
            'pack_desc' => 'pack_desc'
        );
    }

}
