<?php

namespace AbstractModels;

abstract class AbstractSuppliers extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $suppliers_id;

    /**
     *
     * @var string
     */
    public $suppliers_name;

    /**
     *
     * @var string
     */
    public $suppliers_desc;

    /**
     *
     * @var integer
     */
    public $is_check;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'suppliers';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractSuppliers[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractSuppliers
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
            'suppliers_id' => 'suppliers_id',
            'suppliers_name' => 'suppliers_name',
            'suppliers_desc' => 'suppliers_desc',
            'is_check' => 'is_check'
        );
    }

}
