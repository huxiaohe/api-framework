<?php

namespace AbstractModels;

abstract class AbstractUserFeed extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $feed_id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var integer
     */
    public $value_id;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var integer
     */
    public $feed_type;

    /**
     *
     * @var integer
     */
    public $is_feed;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_feed';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUserFeed[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUserFeed
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
            'feed_id' => 'feed_id',
            'user_id' => 'user_id',
            'value_id' => 'value_id',
            'goods_id' => 'goods_id',
            'feed_type' => 'feed_type',
            'is_feed' => 'is_feed'
        );
    }

}
