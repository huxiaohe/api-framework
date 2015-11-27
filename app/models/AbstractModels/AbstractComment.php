<?php

namespace AbstractModels;

use Phalcon\Mvc\Model\Validator\Email as Email;

abstract class AbstractComment extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $comment_id;

    /**
     *
     * @var integer
     */
    public $comment_type;

    /**
     *
     * @var integer
     */
    public $id_value;

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
    public $content;

    /**
     *
     * @var integer
     */
    public $comment_rank;

    /**
     *
     * @var integer
     */
    public $add_time;

    /**
     *
     * @var string
     */
    public $ip_address;

    /**
     *
     * @var integer
     */
    public $status;

    /**
     *
     * @var integer
     */
    public $parent_id;

    /**
     *
     * @var integer
     */
    public $user_id;

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
        return 'comment';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractComment[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractComment
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
            'comment_id' => 'comment_id',
            'comment_type' => 'comment_type',
            'id_value' => 'id_value',
            'email' => 'email',
            'user_name' => 'user_name',
            'content' => 'content',
            'comment_rank' => 'comment_rank',
            'add_time' => 'add_time',
            'ip_address' => 'ip_address',
            'status' => 'status',
            'parent_id' => 'parent_id',
            'user_id' => 'user_id'
        );
    }

}
