<?php

namespace AbstractModels;

abstract class AbstractSessionsData extends \ModelBase
{

    /**
     *
     * @var string
     */
    public $sesskey;

    /**
     *
     * @var integer
     */
    public $expiry;

    /**
     *
     * @var string
     */
    public $data;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sessions_data';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractSessionsData[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractSessionsData
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
            'sesskey' => 'sesskey',
            'expiry' => 'expiry',
            'data' => 'data'
        );
    }

}
