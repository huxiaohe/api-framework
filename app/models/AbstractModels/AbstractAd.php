<?php

namespace AbstractModels;

abstract class AbstractAd extends \ModelBase
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
    public $position_id;

    /**
     *
     * @var integer
     */
    public $media_type;

    /**
     *
     * @var string
     */
    public $ad_name;

    /**
     *
     * @var string
     */
    public $ad_link;

    /**
     *
     * @var string
     */
    public $ad_code;

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
    public $link_man;

    /**
     *
     * @var string
     */
    public $link_email;

    /**
     *
     * @var string
     */
    public $link_phone;

    /**
     *
     * @var integer
     */
    public $click_count;

    /**
     *
     * @var integer
     */
    public $enabled;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ad';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAd[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAd
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
            'position_id' => 'position_id',
            'media_type' => 'media_type',
            'ad_name' => 'ad_name',
            'ad_link' => 'ad_link',
            'ad_code' => 'ad_code',
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'link_man' => 'link_man',
            'link_email' => 'link_email',
            'link_phone' => 'link_phone',
            'click_count' => 'click_count',
            'enabled' => 'enabled'
        );
    }

}
