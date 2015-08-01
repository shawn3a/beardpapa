<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 1/08/15
 * Time: 1:27 PM
 */
class PolicyImage extends Image {

    private static $has_one = array(
        'AboutPage' => 'AboutPage'
    );

}