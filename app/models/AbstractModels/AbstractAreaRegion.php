<?php

namespace AbstractModels;

abstract class AbstractAreaRegion extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $shipping_area_id;

    /**
     *
     * @var integer
     */
    public $region_id;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'area_region';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAreaRegion[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAreaRegion
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
            'shipping_area_id' => 'shipping_area_id',
            'region_id' => 'region_id'
        );
    }

}
