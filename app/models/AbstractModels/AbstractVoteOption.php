<?php

namespace AbstractModels;

abstract class AbstractVoteOption extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $option_id;

    /**
     *
     * @var integer
     */
    public $vote_id;

    /**
     *
     * @var string
     */
    public $option_name;

    /**
     *
     * @var integer
     */
    public $option_count;

    /**
     *
     * @var integer
     */
    public $option_order;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'vote_option';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractVoteOption[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractVoteOption
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
            'option_id' => 'option_id',
            'vote_id' => 'vote_id',
            'option_name' => 'option_name',
            'option_count' => 'option_count',
            'option_order' => 'option_order'
        );
    }

}
