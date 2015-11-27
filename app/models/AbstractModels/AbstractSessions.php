<?php

namespace AbstractModels;

use Phalcon\Mvc\Model\Validator\Email as Email;

abstract class AbstractSessions extends \ModelBase
{

    /**
     *
     * @var string
     */
    public $sesskey;

    /**
     *
     * @var integer
     */
    public $expiry;

    /**
     *
     * @var integer
     */
    public $userid;

    /**
     *
     * @var integer
     */
    public $adminid;

    /**
     *
     * @var string
     */
    public $ip;

    /**
     *
     * @var string
     */
    public $user_name;

    /**
     *
     * @var integer
     */
    public $user_rank;

    /**
     *
     * @var double
     */
    public $discount;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $data;

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
        return 'sessions';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractSessions[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractSessions
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
            'sesskey' => 'sesskey',
            'expiry' => 'expiry',
            'userid' => 'userid',
            'adminid' => 'adminid',
            'ip' => 'ip',
            'user_name' => 'user_name',
            'user_rank' => 'user_rank',
            'discount' => 'discount',
            'email' => 'email',
            'data' => 'data'
        );
    }

}
