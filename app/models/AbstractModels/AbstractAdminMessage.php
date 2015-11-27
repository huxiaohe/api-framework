<?php

namespace AbstractModels;

abstract class AbstractAdminMessage extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $message_id;

    /**
     *
     * @var integer
     */
    public $sender_id;

    /**
     *
     * @var integer
     */
    public $receiver_id;

    /**
     *
     * @var integer
     */
    public $sent_time;

    /**
     *
     * @var integer
     */
    public $read_time;

    /**
     *
     * @var integer
     */
    public $readed;

    /**
     *
     * @var integer
     */
    public $deleted;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $message;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'admin_message';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdminMessage[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdminMessage
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
            'message_id' => 'message_id',
            'sender_id' => 'sender_id',
            'receiver_id' => 'receiver_id',
            'sent_time' => 'sent_time',
            'read_time' => 'read_time',
            'readed' => 'readed',
            'deleted' => 'deleted',
            'title' => 'title',
            'message' => 'message'
        );
    }

}
