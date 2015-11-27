<?php

namespace AbstractModels;

use Phalcon\Mvc\Model\Validator\Email as Email;

abstract class AbstractEmailSendlist extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var integer
     */
    public $template_id;

    /**
     *
     * @var string
     */
    public $email_content;

    /**
     *
     * @var integer
     */
    public $error;

    /**
     *
     * @var integer
     */
    public $pri;

    /**
     *
     * @var integer
     */
    public $last_send;

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
        return 'email_sendlist';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractEmailSendlist[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractEmailSendlist
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
            'email' => 'email',
            'template_id' => 'template_id',
            'email_content' => 'email_content',
            'error' => 'error',
            'pri' => 'pri',
            'last_send' => 'last_send'
        );
    }

}
