<?php

namespace AbstractModels;

abstract class AbstractFriendLink extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $link_id;

    /**
     *
     * @var string
     */
    public $link_name;

    /**
     *
     * @var string
     */
    public $link_url;

    /**
     *
     * @var string
     */
    public $link_logo;

    /**
     *
     * @var integer
     */
    public $show_order;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'friend_link';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractFriendLink[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractFriendLink
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
            'link_id' => 'link_id',
            'link_name' => 'link_name',
            'link_url' => 'link_url',
            'link_logo' => 'link_logo',
            'show_order' => 'show_order'
        );
    }

}
