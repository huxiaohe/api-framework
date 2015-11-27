<?php

namespace AbstractModels;

use Phalcon\Mvc\Model\Validator\Email as Email;

abstract class AbstractBookingGoods extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $rec_id;

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
    public $link_man;

    /**
     *
     * @var string
     */
    public $tel;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var string
     */
    public $goods_desc;

    /**
     *
     * @var integer
     */
    public $goods_number;

    /**
     *
     * @var integer
     */
    public $booking_time;

    /**
     *
     * @var integer
     */
    public $is_dispose;

    /**
     *
     * @var string
     */
    public $dispose_user;

    /**
     *
     * @var integer
     */
    public $dispose_time;

    /**
     *
     * @var string
     */
    public $dispose_note;

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
        return 'booking_goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractBookingGoods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractBookingGoods
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
            'rec_id' => 'rec_id',
            'user_id' => 'user_id',
            'email' => 'email',
            'link_man' => 'link_man',
            'tel' => 'tel',
            'goods_id' => 'goods_id',
            'goods_desc' => 'goods_desc',
            'goods_number' => 'goods_number',
            'booking_time' => 'booking_time',
            'is_dispose' => 'is_dispose',
            'dispose_user' => 'dispose_user',
            'dispose_time' => 'dispose_time',
            'dispose_note' => 'dispose_note'
        );
    }

}
