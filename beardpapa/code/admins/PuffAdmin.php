<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 31/07/15
 * Time: 1:54 PM
 */
class PuffAdmin extends ModelAdmin {

    private static $managed_models = array('Puff');

    private static $menu_title = 'Puffs';

    private static $url_segment = 'puff';

}