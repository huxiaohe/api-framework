<?php

namespace AbstractModels;

abstract class AbstractRegion extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $region_id;

    /**
     *
     * @var integer
     */
    public $parent_id;

    /**
     *
     * @var string
     */
    public $region_name;

    /**
     *
     * @var integer
     */
    public $region_type;

    /**
     *
     * @var integer
     */
    public $agency_id;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'region';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractRegion[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractRegion
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
            'region_id' => 'region_id',
            'parent_id' => 'parent_id',
            'region_name' => 'region_name',
            'region_type' => 'region_type',
            'agency_id' => 'agency_id'
        );
    }

}
