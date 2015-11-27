<?php

namespace AbstractModels;

abstract class AbstractTopic extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $topic_id;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $intro;

    /**
     *
     * @var integer
     */
    public $start_time;

    /**
     *
     * @var integer
     */
    public $end_time;

    /**
     *
     * @var string
     */
    public $data;

    /**
     *
     * @var string
     */
    public $template;

    /**
     *
     * @var string
     */
    public $css;

    /**
     *
     * @var string
     */
    public $topic_img;

    /**
     *
     * @var string
     */
    public $title_pic;

    /**
     *
     * @var string
     */
    public $base_style;

    /**
     *
     * @var string
     */
    public $htmls;

    /**
     *
     * @var string
     */
    public $keywords;

    /**
     *
     * @var string
     */
    public $description;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'topic';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractTopic[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractTopic
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
            'topic_id' => 'topic_id',
            'title' => 'title',
            'intro' => 'intro',
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'data' => 'data',
            'template' => 'template',
            'css' => 'css',
            'topic_img' => 'topic_img',
            'title_pic' => 'title_pic',
            'base_style' => 'base_style',
            'htmls' => 'htmls',
            'keywords' => 'keywords',
            'description' => 'description'
        );
    }

}
