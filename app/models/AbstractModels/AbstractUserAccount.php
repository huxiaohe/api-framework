<?php

namespace AbstractModels;

abstract class AbstractUserAccount extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $admin_user;

    /**
     *
     * @var double
     */
    public $amount;

    /**
     *
     * @var integer
     */
    public $add_time;

    /**
     *
     * @var integer
     */
    public $paid_time;

    /**
     *
     * @var string
     */
    public $admin_note;

    /**
     *
     * @var string
     */
    public $user_note;

    /**
     *
     * @var integer
     */
    public $process_type;

    /**
     *
     * @var string
     */
    public $payment;

    /**
     *
     * @var integer
     */
    public $is_paid;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_account';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUserAccount[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUserAccount
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
            'user_id' => 'user_id',
            'admin_user' => 'admin_user',
            'amount' => 'amount',
            'add_time' => 'add_time',
            'paid_time' => 'paid_time',
            'admin_note' => 'admin_note',
            'user_note' => 'user_note',
            'process_type' => 'process_type',
            'payment' => 'payment',
            'is_paid' => 'is_paid'
        );
    }

}
