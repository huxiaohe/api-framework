<?php

namespace AbstractModels;

abstract class AbstractPlugins extends \ModelBase
{

    /**
     *
     * @var string
     */
    public $code;

    /**
     *
     * @var string
     */
    public $version;

    /**
     *
     * @var string
     */
    public $library;

    /**
     *
     * @var integer
     */
    public $assign;

    /**
     *
     * @var integer
     */
    public $install_date;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'plugins';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractPlugins[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractPlugins
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
            'code' => 'code',
            'version' => 'version',
            'library' => 'library',
            'assign' => 'assign',
            'install_date' => 'install_date'
        );
    }

}
