<?php

namespace AbstractModels;

use Phalcon\Mvc\Model\Validator\Email as Email;

abstract class AbstractUserAddress extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $address_id;

    /**
     *
     * @var string
     */
    public $address_name;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $consignee;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var integer
     */
    public $country;

    /**
     *
     * @var integer
     */
    public $province;

    /**
     *
     * @var integer
     */
    public $city;

    /**
     *
     * @var integer
     */
    public $district;

    /**
     *
     * @var string
     */
    public $address;

    /**
     *
     * @var string
     */
    public $zipcode;

    /**
     *
     * @var string
     */
    public $tel;

    /**
     *
     * @var string
     */
    public $mobile;

    /**
     *
     * @var string
     */
    public $sign_building;

    /**
     *
     * @var string
     */
    public $best_time;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_address';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUserAddress[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractUserAddress
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
            'address_id' => 'address_id',
            'address_name' => 'address_name',
            'user_id' => 'user_id',
            'consignee' => 'consignee',
            'email' => 'email',
            'country' => 'country',
            'province' => 'province',
            'city' => 'city',
            'district' => 'district',
            'address' => 'address',
            'zipcode' => 'zipcode',
            'tel' => 'tel',
            'mobile' => 'mobile',
            'sign_building' => 'sign_building',
            'best_time' => 'best_time'
        );
    }

}
