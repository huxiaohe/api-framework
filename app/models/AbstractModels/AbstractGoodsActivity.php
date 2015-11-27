<?php

namespace AbstractModels;

abstract class AbstractGoodsActivity extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $act_id;

    /**
     *
     * @var string
     */
    public $act_name;

    /**
     *
     * @var string
     */
    public $act_desc;

    /**
     *
     * @var integer
     */
    public $act_type;

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var integer
     */
    public $product_id;

    /**
     *
     * @var string
     */
    public $goods_name;

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
     * @var integer
     */
    public $is_finished;

    /**
     *
     * @var string
     */
    public $ext_info;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'goods_activity';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGoodsActivity[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGoodsActivity
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
            'act_id' => 'act_id',
            'act_name' => 'act_name',
            'act_desc' => 'act_desc',
            'act_type' => 'act_type',
            'goods_id' => 'goods_id',
            'product_id' => 'product_id',
            'goods_name' => 'goods_name',
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'is_finished' => 'is_finished',
            'ext_info' => 'ext_info'
        );
    }

}
