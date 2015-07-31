<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 30/07/15
 * Time: 5:27 PM
 */
class Puff extends DataObject {

    private static $db = array(
        'Title' => 'Varchar(20)',
        'Description' => 'HTMLText',
        'Sort' => 'Int'
    );

    private static $has_one = array(
        'MainImage' => 'MoreImage'
    );

    private static $has_many = array(
        'Images' => 'SiteImage'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab('Root.Main', array(
            UploadField::create('Images', 'Products Images', $this->Images())
        ));

        return $fields;
    }

    public function getTestImages() {
        $image = $this->Images()->first();
        $images = new ArrayList();

        for ($i = 0; $i < 8; $i ++) {
            $images->push($image);
        }

        return $images;
    }
}