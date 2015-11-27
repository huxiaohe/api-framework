<?php

namespace AbstractModels;

abstract class AbstractCategory extends \ModelBase
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
    public $parent_id;

    /**
     *
     * @var integer
     */
    public $sort_order;

    /**
     *
     * @var string
     */
    public $template_file;

    /**
     *
     * @var string
     */
    public $measure_unit;

    /**
     *
     * @var integer
     */
    public $show_in_nav;

    /**
     *
     * @var string
     */
    public $style;

    /**
     *
     * @var integer
     */
    public $is_show;

    /**
     *
     * @var integer
     */
    public $grade;

    /**
     *
     * @var string
     */
    public $filter_attr;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'category';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCategory[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCategory
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
            'keywords' => 'keywords',
            'cat_desc' => 'cat_desc',
            'parent_id' => 'parent_id',
            'sort_order' => 'sort_order',
            'template_file' => 'template_file',
            'measure_unit' => 'measure_unit',
            'show_in_nav' => 'show_in_nav',
            'style' => 'style',
            'is_show' => 'is_show',
            'grade' => 'grade',
            'filter_attr' => 'filter_attr'
        );
    }

}
