<?php

namespace AbstractModels;

abstract class AbstractUserRank extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $rank_id;

    /**
     *
     * @var string
     */
    public $rank_name;

    /**
     *
     * @var integer
     */
    public $min_points;

    /**
     *
     * @var integer
     */
    public $max_points;

    /**
     *
     * @var integer
     */
    public $discount;

    /**
     *
     * @var integer
     */
    public $show_price;

    /**
     *
     * @var integer
     */
    public $special_rank;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_rank';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUserRank[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUserRank
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
            'rank_id' => 'rank_id',
            'rank_name' => 'rank_name',
            'min_points' => 'min_points',
            'max_points' => 'max_points',
            'discount' => 'discount',
            'show_price' => 'show_price',
            'special_rank' => 'special_rank'
        );
    }

}
