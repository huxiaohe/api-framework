<?php

namespace AbstractModels;

abstract class AbstractAdCustom extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $ad_id;

    /**
     *
     * @var integer
     */
    public $ad_type;

    /**
     *
     * @var string
     */
    public $ad_name;

    /**
     *
     * @var integer
     */
    public $add_time;

    /**
     *
     * @var string
     */
    public $content;

    /**
     *
     * @var string
     */
    public $url;

    /**
     *
     * @var integer
     */
    public $ad_status;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ad_custom';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdCustom[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdCustom
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
            'ad_id' => 'ad_id',
            'ad_type' => 'ad_type',
            'ad_name' => 'ad_name',
            'add_time' => 'add_time',
            'content' => 'content',
            'url' => 'url',
            'ad_status' => 'ad_status'
        );
    }

}
