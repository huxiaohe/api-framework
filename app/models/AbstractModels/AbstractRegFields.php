<?php

namespace AbstractModels;

abstract class AbstractRegFields extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $reg_field_name;

    /**
     *
     * @var integer
     */
    public $dis_order;

    /**
     *
     * @var integer
     */
    public $display;

    /**
     *
     * @var integer
     */
    public $type;

    /**
     *
     * @var integer
     */
    public $is_need;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'reg_fields';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractRegFields[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractRegFields
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
            'reg_field_name' => 'reg_field_name',
            'dis_order' => 'dis_order',
            'display' => 'display',
            'type' => 'type',
            'is_need' => 'is_need'
        );
    }

}
