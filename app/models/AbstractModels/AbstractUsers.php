<?php

namespace AbstractModels;

use Phalcon\Mvc\Model\Validator\Email as Email;

abstract class AbstractUsers extends \ModelBase
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
    public $email;

    /**
     *
     * @var string
     */
    public $user_name;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $question;

    /**
     *
     * @var string
     */
    public $answer;

    /**
     *
     * @var integer
     */
    public $sex;

    /**
     *
     * @var string
     */
    public $birthday;

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
    public $pay_points;

    /**
     *
     * @var integer
     */
    public $rank_points;

    /**
     *
     * @var integer
     */
    public $address_id;

    /**
     *
     * @var integer
     */
    public $reg_time;

    /**
     *
     * @var integer
     */
    public $last_login;

    /**
     *
     * @var string
     */
    public $last_time;

    /**
     *
     * @var string
     */
    public $last_ip;

    /**
     *
     * @var integer
     */
    public $visit_count;

    /**
     *
     * @var integer
     */
    public $user_rank;

    /**
     *
     * @var integer
     */
    public $is_special;

    /**
     *
     * @var string
     */
    public $ec_salt;

    /**
     *
     * @var string
     */
    public $salt;

    /**
     *
     * @var integer
     */
    public $parent_id;

    /**
     *
     * @var integer
     */
    public $flag;

    /**
     *
     * @var string
     */
    public $alias;

    /**
     *
     * @var string
     */
    public $msn;

    /**
     *
     * @var string
     */
    public $qq;

    /**
     *
     * @var string
     */
    public $office_phone;

    /**
     *
     * @var string
     */
    public $home_phone;

    /**
     *
     * @var string
     */
    public $mobile_phone;

    /**
     *
     * @var integer
     */
    public $is_validated;

    /**
     *
     * @var double
     */
    public $credit_line;

    /**
     *
     * @var string
     */
    public $passwd_question;

    /**
     *
     * @var string
     */
    public $passwd_answer;

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
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUsers[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUsers
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
            'email' => 'email',
            'user_name' => 'user_name',
            'password' => 'password',
            'question' => 'question',
            'answer' => 'answer',
            'sex' => 'sex',
            'birthday' => 'birthday',
            'user_money' => 'user_money',
            'frozen_money' => 'frozen_money',
            'pay_points' => 'pay_points',
            'rank_points' => 'rank_points',
            'address_id' => 'address_id',
            'reg_time' => 'reg_time',
            'last_login' => 'last_login',
            'last_time' => 'last_time',
            'last_ip' => 'last_ip',
            'visit_count' => 'visit_count',
            'user_rank' => 'user_rank',
            'is_special' => 'is_special',
            'ec_salt' => 'ec_salt',
            'salt' => 'salt',
            'parent_id' => 'parent_id',
            'flag' => 'flag',
            'alias' => 'alias',
            'msn' => 'msn',
            'qq' => 'qq',
            'office_phone' => 'office_phone',
            'home_phone' => 'home_phone',
            'mobile_phone' => 'mobile_phone',
            'is_validated' => 'is_validated',
            'credit_line' => 'credit_line',
            'passwd_question' => 'passwd_question',
            'passwd_answer' => 'passwd_answer'
        );
    }

}
