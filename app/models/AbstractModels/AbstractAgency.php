<?php

namespace AbstractModels;

abstract class AbstractAgency extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $agency_id;

    /**
     *
     * @var string
     */
    public $agency_name;

    /**
     *
     * @var string
     */
    public $agency_desc;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'agency';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAgency[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAgency
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
            'agency_id' => 'agency_id',
            'agency_name' => 'agency_name',
            'agency_desc' => 'agency_desc'
        );
    }

}
