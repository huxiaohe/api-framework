<?php

namespace AbstractModels;

abstract class AbstractAttribute extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $attr_id;

    /**
     *
     * @var integer
     */
    public $cat_id;

    /**
     *
     * @var string
     */
    public $attr_name;

    /**
     *
     * @var integer
     */
    public $attr_input_type;

    /**
     *
     * @var integer
     */
    public $attr_type;

    /**
     *
     * @var string
     */
    public $attr_values;

    /**
     *
     * @var integer
     */
    public $attr_index;

    /**
     *
     * @var integer
     */
    public $sort_order;

    /**
     *
     * @var integer
     */
    public $is_linked;

    /**
     *
     * @var integer
     */
    public $attr_group;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'attribute';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAttribute[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAttribute
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
            'attr_id' => 'attr_id',
            'cat_id' => 'cat_id',
            'attr_name' => 'attr_name',
            'attr_input_type' => 'attr_input_type',
            'attr_type' => 'attr_type',
            'attr_values' => 'attr_values',
            'attr_index' => 'attr_index',
            'sort_order' => 'sort_order',
            'is_linked' => 'is_linked',
            'attr_group' => 'attr_group'
        );
    }

}
