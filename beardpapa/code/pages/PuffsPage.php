<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 27/07/15
 * Time: 2:18 PM
 */
class PuffsPage extends Page {


    public function getPuffs() {
        $puffs = Puff::get()->sort('Sort');

        return $puffs;
    }


}

class PuffsPage_Controller extends Page_Controller {

    public function init() {
        parent::init();

        Requirements::javascript(JS_DIR . '/puffspage.js');
    }
}