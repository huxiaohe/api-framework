<?php

namespace AbstractModels;

abstract class AbstractSnatchLog extends \ModelBase
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
    public $snatch_id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var double
     */
    public $bid_price;

    /**
     *
     * @var integer
     */
    public $bid_time;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'snatch_log';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractSnatchLog[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractSnatchLog
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
            'snatch_id' => 'snatch_id',
            'user_id' => 'user_id',
            'bid_price' => 'bid_price',
            'bid_time' => 'bid_time'
        );
    }

}
