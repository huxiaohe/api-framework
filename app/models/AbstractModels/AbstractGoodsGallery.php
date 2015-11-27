<?php

namespace AbstractModels;

abstract class AbstractGoodsGallery extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $img_id;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var string
     */
    public $img_url;

    /**
     *
     * @var string
     */
    public $img_desc;

    /**
     *
     * @var string
     */
    public $thumb_url;

    /**
     *
     * @var string
     */
    public $img_original;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'goods_gallery';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGoodsGallery[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGoodsGallery
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
            'img_id' => 'img_id',
            'goods_id' => 'goods_id',
            'img_url' => 'img_url',
            'img_desc' => 'img_desc',
            'thumb_url' => 'thumb_url',
            'img_original' => 'img_original'
        );
    }

}
