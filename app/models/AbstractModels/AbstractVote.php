<?php

namespace AbstractModels;

abstract class AbstractVote extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $vote_id;

    /**
     *
     * @var string
     */
    public $vote_name;

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
     * @var integer
     */
    public $can_multi;

    /**
     *
     * @var integer
     */
    public $vote_count;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'vote';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractVote[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractVote
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
            'vote_id' => 'vote_id',
            'vote_name' => 'vote_name',
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'can_multi' => 'can_multi',
            'vote_count' => 'vote_count'
        );
    }

}
