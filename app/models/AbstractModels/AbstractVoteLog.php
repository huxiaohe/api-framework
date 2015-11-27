<?php

namespace AbstractModels;

abstract class AbstractVoteLog extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $log_id;

    /**
     *
     * @var integer
     */
    public $vote_id;

    /**
     *
     * @var string
     */
    public $ip_address;

    /**
     *
     * @var integer
     */
    public $vote_time;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'vote_log';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractVoteLog[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractVoteLog
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
            'log_id' => 'log_id',
            'vote_id' => 'vote_id',
            'ip_address' => 'ip_address',
            'vote_time' => 'vote_time'
        );
    }

}
