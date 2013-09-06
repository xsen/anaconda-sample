<?php defined('SYSPATH') or die( 'No direct script access.' );

return array(
    array(
        'url'         => '/',
        'name'        => Controller_Welcome::get_name(),
        'access'      => Controller_Welcome::has_access(),
        'controllers' => array('Welcome')
    )
);
?>