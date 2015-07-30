<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 30/07/15
 * Time: 11:59 AM
 */
class Chapter extends DataObject {

    private static $db = array(
        'Number' => 'Varchar(2)',
        'Title' => 'Varchar(200)',
        'Summary' => 'Text',
        'Content' => 'HTMLText'
    );

    private static $has_one = array(
        'Image' => 'SiteImage'
    );

    private static $summary_fields = array(
        'Number' => 'Number',
        'Title' => 'Title'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->replaceField('Image',
            UploadField::create('Image', 'Image', $this->Image())
                ->setAllowedExtensions(array('jpg', 'jpeg', 'gif', 'png'))
                ->setFolderName('chapter')
        );

        return $fields;
    }
}