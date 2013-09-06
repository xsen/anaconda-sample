<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template_CRUD {

    protected $model_name = 'Post';

    public static function get_name()
    {
        return 'Посты';
    }

    public static function has_access()
    {
        return true;
    }

}
