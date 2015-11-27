<?php

namespace AbstractModels;

abstract class AbstractKeywords extends \ModelBase
{

    /**
     *
     * @var string
     */
    public $date;

    /**
     *
     * @var string
     */
    public $searchengine;

    /**
     *
     * @var string
     */
    public $keyword;

    /**
     *
     * @var integer
     */
    public $count;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'keywords';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractKeywords[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractKeywords
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
            'date' => 'date',
            'searchengine' => 'searchengine',
            'keyword' => 'keyword',
            'count' => 'count'
        );
    }

}
