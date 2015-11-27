<?php

namespace AbstractModels;

abstract class AbstractStats extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $access_time;

    /**
     *
     * @var string
     */
    public $ip_address;

    /**
     *
     * @var integer
     */
    public $visit_times;

    /**
     *
     * @var string
     */
    public $browser;

    /**
     *
     * @var string
     */
    public $system;

    /**
     *
     * @var string
     */
    public $language;

    /**
     *
     * @var string
     */
    public $area;

    /**
     *
     * @var string
     */
    public $referer_domain;

    /**
     *
     * @var string
     */
    public $referer_path;

    /**
     *
     * @var string
     */
    public $access_url;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'stats';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractStats[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractStats
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
            'access_time' => 'access_time',
            'ip_address' => 'ip_address',
            'visit_times' => 'visit_times',
            'browser' => 'browser',
            'system' => 'system',
            'language' => 'language',
            'area' => 'area',
            'referer_domain' => 'referer_domain',
            'referer_path' => 'referer_path',
            'access_url' => 'access_url'
        );
    }

}
