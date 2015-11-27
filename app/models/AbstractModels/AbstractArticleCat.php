<?php

namespace AbstractModels;

abstract class AbstractArticleCat extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $cat_id;

    /**
     *
     * @var string
     */
    public $cat_name;

    /**
     *
     * @var integer
     */
    public $cat_type;

    /**
     *
     * @var string
     */
    public $keywords;

    /**
     *
     * @var string
     */
    public $cat_desc;

    /**
     *
     * @var integer
     */
    public $sort_order;

    /**
     *
     * @var integer
     */
    public $show_in_nav;

    /**
     *
     * @var integer
     */
    public $parent_id;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'article_cat';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractArticleCat[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractArticleCat
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
            'cat_id' => 'cat_id',
            'cat_name' => 'cat_name',
            'cat_type' => 'cat_type',
            'keywords' => 'keywords',
            'cat_desc' => 'cat_desc',
            'sort_order' => 'sort_order',
            'show_in_nav' => 'show_in_nav',
            'parent_id' => 'parent_id'
        );
    }

}
