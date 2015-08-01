<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 27/07/15
 * Time: 2:18 PM
 */
class AboutPage extends Page {

    private static $db = array(
        'PolicySummary' => 'Text',
        'PolicyDetail' => 'HTMLText',
        'RecipeSummary' => 'Text',
        'RecipeDetail' => 'HTMLText',
        'ReputationSummary' => 'Text',
        'ReputationDetail' => 'HTMLText'
    );

    private static $has_one = array();

    private static $has_many = array(
        'PolicyImages' => 'PolicyImage',
        'RecipeImages' => 'SiteImage',
        'ReputationImages' => 'MoreImage'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeFieldsFromTab('Root.Main', array('Content'));

        $fields->addFieldsToTab('Root.Main', array(
            TextField::create('PolicySummary', 'Policy Summary'),
            HtmlEditorField::create('PolicyDetail', 'Policy Detail'),
            UploadField::create('PolicyImages', 'Policy Images', $this->PolicyImages())
                ->setAllowedExtensions(array('jpg', 'jpeg', 'gif', 'png'))
                ->setAllowedMaxFileNumber(6)
                ->setFolderName('AboutPage'),

            TextField::create('RecipeSummary', 'Recipe Summary'),
            HtmlEditorField::create('RecipeDetail', 'Recipe Detail'),
            UploadField::create('RecipeImages', 'Recipe Images', $this->RecipeImages())
                ->setAllowedExtensions(array('jpg', 'jpeg', 'gif', 'png'))
                ->setAllowedMaxFileNumber(6)
                ->setFolderName('AboutPage'),

            TextField::create('ReputationSummary', 'Reputation Summary'),
            HtmlEditorField::create('ReputationDetail', 'Reputation Detail'),
            UploadField::create('ReputationImages', 'Reputation Images', $this->ReputationImages())
                ->setAllowedExtensions(array('jpg', 'jpeg', 'gif', 'png'))
                ->setAllowedMaxFileNumber(6)
                ->setFolderName('AboutPage'),
        ), 'Title');

        return $fields;
    }

}

class AboutPage_Controller extends Page_Controller {

}