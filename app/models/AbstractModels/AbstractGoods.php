<?php

namespace AbstractModels;

abstract class AbstractGoods extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $goods_id;

    /**
     *
     * @var integer
     */
    public $cat_id;

    /**
     *
     * @var string
     */
    public $goods_sn;

    /**
     *
     * @var string
     */
    public $goods_name;

    /**
     *
     * @var string
     */
    public $goods_name_style;

    /**
     *
     * @var integer
     */
    public $click_count;

    /**
     *
     * @var integer
     */
    public $brand_id;

    /**
     *
     * @var string
     */
    public $provider_name;

    /**
     *
     * @var integer
     */
    public $goods_number;

    /**
     *
     * @var double
     */
    public $goods_weight;

    /**
     *
     * @var double
     */
    public $market_price;

    /**
     *
     * @var double
     */
    public $shop_price;

    /**
     *
     * @var double
     */
    public $promote_price;

    /**
     *
     * @var integer
     */
    public $promote_start_date;

    /**
     *
     * @var integer
     */
    public $promote_end_date;

    /**
     *
     * @var integer
     */
    public $warn_number;

    /**
     *
     * @var string
     */
    public $keywords;

    /**
     *
     * @var string
     */
    public $goods_brief;

    /**
     *
     * @var string
     */
    public $goods_desc;

    /**
     *
     * @var string
     */
    public $goods_thumb;

    /**
     *
     * @var string
     */
    public $goods_img;

    /**
     *
     * @var string
     */
    public $original_img;

    /**
     *
     * @var integer
     */
    public $is_real;

    /**
     *
     * @var string
     */
    public $extension_code;

    /**
     *
     * @var integer
     */
    public $is_on_sale;

    /**
     *
     * @var integer
     */
    public $is_alone_sale;

    /**
     *
     * @var integer
     */
    public $is_shipping;

    /**
     *
     * @var integer
     */
    public $integral;

    /**
     *
     * @var integer
     */
    public $add_time;

    /**
     *
     * @var integer
     */
    public $sort_order;

    /**
     *
     * @var integer
     */
    public $is_delete;

    /**
     *
     * @var integer
     */
    public $is_best;

    /**
     *
     * @var integer
     */
    public $is_new;

    /**
     *
     * @var integer
     */
    public $is_hot;

    /**
     *
     * @var integer
     */
    public $is_promote;

    /**
     *
     * @var integer
     */
    public $bonus_type_id;

    /**
     *
     * @var integer
     */
    public $last_update;

    /**
     *
     * @var integer
     */
    public $goods_type;

    /**
     *
     * @var string
     */
    public $seller_note;

    /**
     *
     * @var integer
     */
    public $give_integral;

    /**
     *
     * @var integer
     */
    public $rank_integral;

    /**
     *
     * @var integer
     */
    public $suppliers_id;

    /**
     *
     * @var integer
     */
    public $is_check;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGoods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractGoods
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
            'goods_id' => 'goods_id',
            'cat_id' => 'cat_id',
            'goods_sn' => 'goods_sn',
            'goods_name' => 'goods_name',
            'goods_name_style' => 'goods_name_style',
            'click_count' => 'click_count',
            'brand_id' => 'brand_id',
            'provider_name' => 'provider_name',
            'goods_number' => 'goods_number',
            'goods_weight' => 'goods_weight',
            'market_price' => 'market_price',
            'shop_price' => 'shop_price',
            'promote_price' => 'promote_price',
            'promote_start_date' => 'promote_start_date',
            'promote_end_date' => 'promote_end_date',
            'warn_number' => 'warn_number',
            'keywords' => 'keywords',
            'goods_brief' => 'goods_brief',
            'goods_desc' => 'goods_desc',
            'goods_thumb' => 'goods_thumb',
            'goods_img' => 'goods_img',
            'original_img' => 'original_img',
            'is_real' => 'is_real',
            'extension_code' => 'extension_code',
            'is_on_sale' => 'is_on_sale',
            'is_alone_sale' => 'is_alone_sale',
            'is_shipping' => 'is_shipping',
            'integral' => 'integral',
            'add_time' => 'add_time',
            'sort_order' => 'sort_order',
            'is_delete' => 'is_delete',
            'is_best' => 'is_best',
            'is_new' => 'is_new',
            'is_hot' => 'is_hot',
            'is_promote' => 'is_promote',
            'bonus_type_id' => 'bonus_type_id',
            'last_update' => 'last_update',
            'goods_type' => 'goods_type',
            'seller_note' => 'seller_note',
            'give_integral' => 'give_integral',
            'rank_integral' => 'rank_integral',
            'suppliers_id' => 'suppliers_id',
            'is_check' => 'is_check'
        );
    }

}
