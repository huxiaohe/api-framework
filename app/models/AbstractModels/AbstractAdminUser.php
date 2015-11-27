<?php

namespace AbstractModels;

use Phalcon\Mvc\Model\Validator\Email as Email;

abstract class AbstractAdminUser extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $user_name;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $ec_salt;

    /**
     *
     * @var integer
     */
    public $add_time;

    /**
     *
     * @var integer
     */
    public $last_login;

    /**
     *
     * @var string
     */
    public $last_ip;

    /**
     *
     * @var string
     */
    public $action_list;

    /**
     *
     * @var string
     */
    public $nav_list;

    /**
     *
     * @var string
     */
    public $lang_type;

    /**
     *
     * @var integer
     */
    public $agency_id;

    /**
     *
     * @var integer
     */
    public $suppliers_id;

    /**
     *
     * @var string
     */
    public $todolist;

    /**
     *
     * @var integer
     */
    public $role_id;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'admin_user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdminUser[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdminUser
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
            'user_id' => 'user_id',
            'user_name' => 'user_name',
            'email' => 'email',
            'password' => 'password',
            'ec_salt' => 'ec_salt',
            'add_time' => 'add_time',
            'last_login' => 'last_login',
            'last_ip' => 'last_ip',
            'action_list' => 'action_list',
            'nav_list' => 'nav_list',
            'lang_type' => 'lang_type',
            'agency_id' => 'agency_id',
            'suppliers_id' => 'suppliers_id',
            'todolist' => 'todolist',
            'role_id' => 'role_id'
        );
    }

}
