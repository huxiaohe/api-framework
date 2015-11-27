<?php

namespace AbstractModels;

abstract class AbstractRole extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $role_id;

    /**
     *
     * @var string
     */
    public $role_name;

    /**
     *
     * @var string
     */
    public $action_list;

    /**
     *
     * @var string
     */
    public $role_describe;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'role';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractRole[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractRole
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
            'role_id' => 'role_id',
            'role_name' => 'role_name',
            'action_list' => 'action_list',
            'role_describe' => 'role_describe'
        );
    }

}
