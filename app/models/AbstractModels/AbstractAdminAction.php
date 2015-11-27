<?php

namespace AbstractModels;

abstract class AbstractAdminAction extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $action_id;

    /**
     *
     * @var integer
     */
    public $parent_id;

    /**
     *
     * @var string
     */
    public $action_code;

    /**
     *
     * @var string
     */
    public $relevance;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'admin_action';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdminAction[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdminAction
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
            'action_id' => 'action_id',
            'parent_id' => 'parent_id',
            'action_code' => 'action_code',
            'relevance' => 'relevance'
        );
    }

}
