<?php
/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 28/07/15
 * Time: 2:17 PM
 */

class Event extends DataObject {

    private static $db = array(
        'Content' => 'Text',
        'Date' => 'Date'
    );

    private static $has_one = array(
        'Image' => 'SiteImage'
    );

    private static $summary_fields = array(
        'Date' => 'Date',
        'Content' => 'Content'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            TextField::create('Content', 'Content'),
            DateField::create('Date', 'Date')->setConfig('showcalendar', true),
            UploadField::create('Image', 'Image', $this->Image())
                ->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'))
                ->setFolderName('Events')
        ));

        return $fields;
    }

    public function getTitle() {
        return $this->Date . ' - ' . $this->Content;
    }
}