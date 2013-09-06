<?php defined('SYSPATH') or die('No direct script access.');

class Model_Post extends ORM {

    public function labels()
    {
        return array(
            'name' => 'Название',
            'text' => 'Текст',
            'date' => 'Дата',
        );
    }
}

?>