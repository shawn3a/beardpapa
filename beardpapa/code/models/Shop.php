<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 28/07/15
 * Time: 1:24 PM
 */
class Shop extends DataObject {

    private static $db = array(
        'Address' => 'Text',
        'Phone' => 'Varchar(50)',
        'Email' => 'Varchar(50)',
        'Website' => 'Varchar(200)',
        'GoogleMap' => 'Text'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        return $fields;
    }
}