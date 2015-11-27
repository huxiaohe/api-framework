<?php

namespace AbstractModels;

abstract class AbstractRegExtendInfo extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $Id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var integer
     */
    public $reg_field_id;

    /**
     *
     * @var string
     */
    public $content;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'reg_extend_info';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractRegExtendInfo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractRegExtendInfo
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
            'Id' => 'Id',
            'user_id' => 'user_id',
            'reg_field_id' => 'reg_field_id',
            'content' => 'content'
        );
    }

}
