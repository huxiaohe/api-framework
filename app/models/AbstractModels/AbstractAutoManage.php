<?php

namespace AbstractModels;

abstract class AbstractAutoManage extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $item_id;

    /**
     *
     * @var string
     */
    public $type;

    /**
     *
     * @var integer
     */
    public $starttime;

    /**
     *
     * @var integer
     */
    public $endtime;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'auto_manage';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAutoManage[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAutoManage
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
            'item_id' => 'item_id',
            'type' => 'type',
            'starttime' => 'starttime',
            'endtime' => 'endtime'
        );
    }

}
