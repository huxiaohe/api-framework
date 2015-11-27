<?php

namespace AbstractModels;

abstract class AbstractAccountLog extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $log_id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var double
     */
    public $user_money;

    /**
     *
     * @var double
     */
    public $frozen_money;

    /**
     *
     * @var integer
     */
    public $rank_points;

    /**
     *
     * @var integer
     */
    public $pay_points;

    /**
     *
     * @var integer
     */
    public $change_time;

    /**
     *
     * @var string
     */
    public $change_desc;

    /**
     *
     * @var integer
     */
    public $change_type;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'account_log';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAccountLog[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAccountLog
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
            'log_id' => 'log_id',
            'user_id' => 'user_id',
            'user_money' => 'user_money',
            'frozen_money' => 'frozen_money',
            'rank_points' => 'rank_points',
            'pay_points' => 'pay_points',
            'change_time' => 'change_time',
            'change_desc' => 'change_desc',
            'change_type' => 'change_type'
        );
    }

}
