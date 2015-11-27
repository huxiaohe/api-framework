<?php

namespace AbstractModels;

abstract class AbstractVolumePrice extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $price_type;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var integer
     */
    public $volume_number;

    /**
     *
     * @var double
     */
    public $volume_price;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'volume_price';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractVolumePrice[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractVolumePrice
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
            'price_type' => 'price_type',
            'goods_id' => 'goods_id',
            'volume_number' => 'volume_number',
            'volume_price' => 'volume_price'
        );
    }

}
