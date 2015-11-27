<?php

namespace AbstractModels;

abstract class AbstractAdPosition extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $position_id;

    /**
     *
     * @var string
     */
    public $position_name;

    /**
     *
     * @var integer
     */
    public $ad_width;

    /**
     *
     * @var integer
     */
    public $ad_height;

    /**
     *
     * @var string
     */
    public $position_desc;

    /**
     *
     * @var string
     */
    public $position_style;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ad_position';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdPosition[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdPosition
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
            'position_id' => 'position_id',
            'position_name' => 'position_name',
            'ad_width' => 'ad_width',
            'ad_height' => 'ad_height',
            'position_desc' => 'position_desc',
            'position_style' => 'position_style'
        );
    }

}
