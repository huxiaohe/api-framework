<?php

namespace AbstractModels;

abstract class AbstractMailTemplates extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $template_id;

    /**
     *
     * @var string
     */
    public $template_code;

    /**
     *
     * @var integer
     */
    public $is_html;

    /**
     *
     * @var string
     */
    public $template_subject;

    /**
     *
     * @var string
     */
    public $template_content;

    /**
     *
     * @var integer
     */
    public $last_modify;

    /**
     *
     * @var integer
     */
    public $last_send;

    /**
     *
     * @var string
     */
    public $type;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'mail_templates';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractMailTemplates[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractMailTemplates
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
            'template_id' => 'template_id',
            'template_code' => 'template_code',
            'is_html' => 'is_html',
            'template_subject' => 'template_subject',
            'template_content' => 'template_content',
            'last_modify' => 'last_modify',
            'last_send' => 'last_send',
            'type' => 'type'
        );
    }

}
