<?php

namespace AbstractModels;

abstract class AbstractUserBonus extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $bonus_id;

    /**
     *
     * @var integer
     */
    public $bonus_type_id;

    /**
     *
     * @var string
     */
    public $bonus_sn;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var integer
     */
    public $used_time;

    /**
     *
     * @var integer
     */
    public $order_id;

    /**
     *
     * @var integer
     */
    public $emailed;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_bonus';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUserBonus[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUserBonus
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
            'bonus_id' => 'bonus_id',
            'bonus_type_id' => 'bonus_type_id',
            'bonus_sn' => 'bonus_sn',
            'user_id' => 'user_id',
            'used_time' => 'used_time',
            'order_id' => 'order_id',
            'emailed' => 'emailed'
        );
    }

}
