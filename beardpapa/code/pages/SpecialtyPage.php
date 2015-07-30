<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 27/07/15
 * Time: 2:18 PM
 */
class SpecialtyPage extends Page {

    private static $db = array(
        'Slogan' => 'Text'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', new TextField('Slogan', 'Slogan'), 'Content');

        return $fields;
    }

}

class SpecialtyPage_Controller extends Page_Controller {

}