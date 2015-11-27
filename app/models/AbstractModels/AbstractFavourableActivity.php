<?php

namespace AbstractModels;

abstract class AbstractFavourableActivity extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $act_id;

    /**
     *
     * @var string
     */
    public $act_name;

    /**
     *
     * @var integer
     */
    public $start_time;

    /**
     *
     * @var integer
     */
    public $end_time;

    /**
     *
     * @var string
     */
    public $user_rank;

    /**
     *
     * @var integer
     */
    public $act_range;

    /**
     *
     * @var string
     */
    public $act_range_ext;

    /**
     *
     * @var double
     */
    public $min_amount;

    /**
     *
     * @var double
     */
    public $max_amount;

    /**
     *
     * @var integer
     */
    public $act_type;

    /**
     *
     * @var double
     */
    public $act_type_ext;

    /**
     *
     * @var string
     */
    public $gift;

    /**
     *
     * @var integer
     */
    public $sort_order;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'favourable_activity';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractFavourableActivity[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractFavourableActivity
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
            'act_id' => 'act_id',
            'act_name' => 'act_name',
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'user_rank' => 'user_rank',
            'act_range' => 'act_range',
            'act_range_ext' => 'act_range_ext',
            'min_amount' => 'min_amount',
            'max_amount' => 'max_amount',
            'act_type' => 'act_type',
            'act_type_ext' => 'act_type_ext',
            'gift' => 'gift',
            'sort_order' => 'sort_order'
        );
    }

}
