<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 28/07/15
 * Time: 1:42 PM
 */
class SiteImage extends Image {

    private static $has_one = array(
        'Shop' => 'Shop',
        'Chapter' => 'Chapter',
        'Puff' => 'Puff'
    );
}