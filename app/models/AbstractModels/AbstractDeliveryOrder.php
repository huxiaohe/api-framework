<?php

namespace AbstractModels;

use Phalcon\Mvc\Model\Validator\Email as Email;

abstract class AbstractDeliveryOrder extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $delivery_id;

    /**
     *
     * @var string
     */
    public $delivery_sn;

    /**
     *
     * @var string
     */
    public $order_sn;

    /**
     *
     * @var integer
     */
    public $order_id;

    /**
     *
     * @var string
     */
    public $invoice_no;

    /**
     *
     * @var integer
     */
    public $add_time;

    /**
     *
     * @var integer
     */
    public $shipping_id;

    /**
     *
     * @var string
     */
    public $shipping_name;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $action_user;

    /**
     *
     * @var string
     */
    public $consignee;

    /**
     *
     * @var string
     */
    public $address;

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
    public $sign_building;

    /**
     *
     * @var string
     */
    public $email;

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
    public $best_time;

    /**
     *
     * @var string
     */
    public $postscript;

    /**
     *
     * @var string
     */
    public $how_oos;

    /**
     *
     * @var double
     */
    public $insure_fee;

    /**
     *
     * @var double
     */
    public $shipping_fee;

    /**
     *
     * @var integer
     */
    public $update_time;

    /**
     *
     * @var integer
     */
    public $suppliers_id;

    /**
     *
     * @var integer
     */
    public $status;

    /**
     *
     * @var integer
     */
    public $agency_id;

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
        return 'delivery_order';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractDeliveryOrder[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractDeliveryOrder
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
            'delivery_id' => 'delivery_id',
            'delivery_sn' => 'delivery_sn',
            'order_sn' => 'order_sn',
            'order_id' => 'order_id',
            'invoice_no' => 'invoice_no',
            'add_time' => 'add_time',
            'shipping_id' => 'shipping_id',
            'shipping_name' => 'shipping_name',
            'user_id' => 'user_id',
            'action_user' => 'action_user',
            'consignee' => 'consignee',
            'address' => 'address',
            'country' => 'country',
            'province' => 'province',
            'city' => 'city',
            'district' => 'district',
            'sign_building' => 'sign_building',
            'email' => 'email',
            'zipcode' => 'zipcode',
            'tel' => 'tel',
            'mobile' => 'mobile',
            'best_time' => 'best_time',
            'postscript' => 'postscript',
            'how_oos' => 'how_oos',
            'insure_fee' => 'insure_fee',
            'shipping_fee' => 'shipping_fee',
            'update_time' => 'update_time',
            'suppliers_id' => 'suppliers_id',
            'status' => 'status',
            'agency_id' => 'agency_id'
        );
    }

}
