<?php

namespace AbstractModels;

abstract class AbstractArticle extends \ModelBase
{

    /**
     *
     * @var integer
     */
    public $article_id;

    /**
     *
     * @var integer
     */
    public $cat_id;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $content;

    /**
     *
     * @var string
     */
    public $author;

    /**
     *
     * @var string
     */
    public $author_email;

    /**
     *
     * @var string
     */
    public $keywords;

    /**
     *
     * @var integer
     */
    public $article_type;

    /**
     *
     * @var integer
     */
    public $is_open;

    /**
     *
     * @var integer
     */
    public $add_time;

    /**
     *
     * @var string
     */
    public $file_url;

    /**
     *
     * @var integer
     */
    public $open_type;

    /**
     *
     * @var string
     */
    public $link;

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
        return 'article';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractArticle[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractArticle
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
            'article_id' => 'article_id',
            'cat_id' => 'cat_id',
            'title' => 'title',
            'content' => 'content',
            'author' => 'author',
            'author_email' => 'author_email',
            'keywords' => 'keywords',
            'article_type' => 'article_type',
            'is_open' => 'is_open',
            'add_time' => 'add_time',
            'file_url' => 'file_url',
            'open_type' => 'open_type',
            'link' => 'link',
            'description' => 'description'
        );
    }

}
