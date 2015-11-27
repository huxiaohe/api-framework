<?php

namespace AbstractModels;

abstract class AbstractBrand extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $brand_id;

    /**
     *
     * @var string
     */
    public $brand_name;

    /**
     *
     * @var string
     */
    public $brand_logo;

    /**
     *
     * @var string
     */
    public $brand_desc;

    /**
     *
     * @var string
     */
    public $site_url;

    /**
     *
     * @var integer
     */
    public $sort_order;

    /**
     *
     * @var integer
     */
    public $is_show;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'brand';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractBrand[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractBrand
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
            'brand_id' => 'brand_id',
            'brand_name' => 'brand_name',
            'brand_logo' => 'brand_logo',
            'brand_desc' => 'brand_desc',
            'site_url' => 'site_url',
            'sort_order' => 'sort_order',
            'is_show' => 'is_show'
        );
    }

}
