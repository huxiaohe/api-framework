<?php

namespace AbstractModels;

abstract class AbstractNav extends \ModelBase
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
    public $ctype;

    /**
     *
     * @var integer
     */
    public $cid;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var integer
     */
    public $ifshow;

    /**
     *
     * @var integer
     */
    public $vieworder;

    /**
     *
     * @var integer
     */
    public $opennew;

    /**
     *
     * @var string
     */
    public $url;

    /**
     *
     * @var string
     */
    public $type;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nav';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractNav[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractNav
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
            'ctype' => 'ctype',
            'cid' => 'cid',
            'name' => 'name',
            'ifshow' => 'ifshow',
            'vieworder' => 'vieworder',
            'opennew' => 'opennew',
            'url' => 'url',
            'type' => 'type'
        );
    }

}
