<?php

namespace AbstractModels;

abstract class AbstractFeedback extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $msg_id;

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
     *
     * @var string
     */
    public $user_name;

    /**
     *
     * @var string
     */
    public $user_email;

    /**
     *
     * @var string
     */
    public $msg_title;

    /**
     *
     * @var integer
     */
    public $msg_type;

    /**
     *
     * @var integer
     */
    public $msg_status;

    /**
     *
     * @var string
     */
    public $msg_content;

    /**
     *
     * @var integer
     */
    public $msg_time;

    /**
     *
     * @var string
     */
    public $message_img;

    /**
     *
     * @var integer
     */
    public $order_id;

    /**
     *
     * @var integer
     */
    public $msg_area;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'feedback';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractFeedback[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractFeedback
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
            'msg_id' => 'msg_id',
            'parent_id' => 'parent_id',
            'user_id' => 'user_id',
            'user_name' => 'user_name',
            'user_email' => 'user_email',
            'msg_title' => 'msg_title',
            'msg_type' => 'msg_type',
            'msg_status' => 'msg_status',
            'msg_content' => 'msg_content',
            'msg_time' => 'msg_time',
            'message_img' => 'message_img',
            'order_id' => 'order_id',
            'msg_area' => 'msg_area'
        );
    }

}
