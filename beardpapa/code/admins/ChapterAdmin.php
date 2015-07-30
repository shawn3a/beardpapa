<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 30/07/15
 * Time: 12:07 PM
 */
class ChapterAdmin extends ModelAdmin {

    private static $managed_models = array('Chapter');

    private static $url_segment = 'chapter';

    private static $menu_title = 'Chapters';
}