<?php

namespace AbstractModels;

abstract class AbstractCrons extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $cron_id;

    /**
     *
     * @var string
     */
    public $cron_code;

    /**
     *
     * @var string
     */
    public $cron_name;

    /**
     *
     * @var string
     */
    public $cron_desc;

    /**
     *
     * @var integer
     */
    public $cron_order;

    /**
     *
     * @var string
     */
    public $cron_config;

    /**
     *
     * @var integer
     */
    public $thistime;

    /**
     *
     * @var integer
     */
    public $nextime;

    /**
     *
     * @var integer
     */
    public $day;

    /**
     *
     * @var string
     */
    public $week;

    /**
     *
     * @var string
     */
    public $hour;

    /**
     *
     * @var string
     */
    public $minute;

    /**
     *
     * @var integer
     */
    public $enable;

    /**
     *
     * @var integer
     */
    public $run_once;

    /**
     *
     * @var string
     */
    public $allow_ip;

    /**
     *
     * @var string
     */
    public $alow_files;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'crons';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCrons[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCrons
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
            'cron_id' => 'cron_id',
            'cron_code' => 'cron_code',
            'cron_name' => 'cron_name',
            'cron_desc' => 'cron_desc',
            'cron_order' => 'cron_order',
            'cron_config' => 'cron_config',
            'thistime' => 'thistime',
            'nextime' => 'nextime',
            'day' => 'day',
            'week' => 'week',
            'hour' => 'hour',
            'minute' => 'minute',
            'enable' => 'enable',
            'run_once' => 'run_once',
            'allow_ip' => 'allow_ip',
            'alow_files' => 'alow_files'
        );
    }

}
