<?php

namespace AbstractModels;

abstract class AbstractCatRecommend extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $cat_id;

    /**
     *
     * @var integer
     */
    public $recommend_type;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cat_recommend';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCatRecommend[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCatRecommend
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
            'recommend_type' => 'recommend_type'
        );
    }

}
