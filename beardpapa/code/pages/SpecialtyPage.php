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

    private static $has_one = array(
        'BannerImage' => 'SiteImage'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
                new TextField('Slogan', 'Slogan'),
                UploadField::create('BannerImage', 'Banner Image', $this->BannerImage())
                    ->setAllowedExtensions(array('jpg', 'jpeg', 'gif', 'png'))
            )
        , 'Content');

        return $fields;
    }

    /**
     * @return string
     * Get all chapters
     */
    public function getChapters() {
        $chapters = Chapter::get()->sort('Number');

        return $chapters;
    }

}

class SpecialtyPage_Controller extends Page_Controller {

}