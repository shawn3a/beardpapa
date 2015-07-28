<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 28/07/15
 * Time: 4:36 PM
 */
class ShopAdmin extends ModelAdmin {

    private static $managed_models = array('Shop');

    private static $url_segment = 'shops';

    private static $menu_title = 'Shops';
}