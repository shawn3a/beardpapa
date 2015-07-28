<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 28/07/15
 * Time: 2:29 PM
 */
class EventAdmin extends ModelAdmin {

    private static $managed_models = array('Event');

    private static $url_segment = 'events';

    private static $menu_title = 'Events';

}