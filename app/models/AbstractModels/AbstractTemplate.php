<?php

namespace AbstractModels;

abstract class AbstractTemplate extends \ModelBase
{

    /**
     *
     * @var string
     */
    public $filename;

    /**
     *
     * @var string
     */
    public $region;

    /**
     *
     * @var string
     */
    public $library;

    /**
     *
     * @var integer
     */
    public $sort_order;

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $number;

    /**
     *
     * @var integer
     */
    public $type;

    /**
     *
     * @var string
     */
    public $theme;

    /**
     *
     * @var string
     */
    public $remarks;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'template';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractTemplate[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractTemplate
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
            'filename' => 'filename',
            'region' => 'region',
            'library' => 'library',
            'sort_order' => 'sort_order',
            'id' => 'id',
            'number' => 'number',
            'type' => 'type',
            'theme' => 'theme',
            'remarks' => 'remarks'
        );
    }

}
