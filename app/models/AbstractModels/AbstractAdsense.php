<?php

namespace AbstractModels;

abstract class AbstractAdsense extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $from_ad;

    /**
     *
     * @var string
     */
    public $referer;

    /**
     *
     * @var integer
     */
    public $clicks;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'adsense';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdsense[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAdsense
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
            'from_ad' => 'from_ad',
            'referer' => 'referer',
            'clicks' => 'clicks'
        );
    }

}
