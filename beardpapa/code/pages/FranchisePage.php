<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 27/07/15
 * Time: 2:18 PM
 */
class FranchisePage extends Page {

    private static $db = array(
        'SendEmail' => 'Varchar(50)',
        'FirstName' => 'Varchar(50)',
        'LastName' => 'Varchar(50)',
        'Email' => 'Varchar(50)',
        'Contact' => 'Varchar(50)',
        'CallingTime' => 'Varchar(50)',
        'LiquidCapital' => 'Varchar(50)',
        'TimeStart' => 'Date',
        'Area' => 'Text',
        'Experience' => 'Text',
        'Hear' => 'Text',
        'Message' => 'Text'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            TextField::create('SendEmail', 'Send Email Address')
        ), 'Metadata');

        return $fields;
    }

}

class FranchisePage_Controller extends Page_Controller {

    private static $allowed_actions = array(
        'Form'
    );

    public function Form() {

        $fields = FieldList::create(
            CompositeField::create(array(
                TextField::create('FirstName', 'First Name')->addExtraClass('col-sm-6 col-xs-12'),
                TextField::create('LastName', 'Last Name')->addExtraClass('col-sm-6 col-xs-12'),
                TextField::create('Email', 'Email Address')->addExtraClass('col-sm-6 col-xs-12'),
                TextField::create('Contact', 'Contact Number')->addExtraClass('col-sm-6 col-xs-12'),
                TextField::create('CallingTime', 'Best Calling Time')->addExtraClass('col-sm-6 col-xs-12'),
                TextField::create('LiquidCapital', 'Liquid Capital')->addExtraClass('col-sm-6 col-xs-12'),
                DateField::create('TimeStart', 'Time Frame to Start')->setConfig('showcalendar', 'true')->addExtraClass('col-sm-6 col-xs-12')
            ))->addExtraClass('info'),

            CompositeField::create(array(
                TextareaField::create('Area', 'In what area are you looking to invest in a franchise?')->addExtraClass('col-sm-12'),
                TextareaField::create('Experience', 'Business & Relevant Experience')->addExtraClass('col-sm-12'),
                TextareaField::create('Hear', 'How did you hear about the Beard Papa’s franchise')->addExtraClass('col-sm-12'),
                TextareaField::create('Message', 'Message')->addExtraClass('col-sm-12')
            ))->addExtraClass('questions')
        );

        $actions = FieldList::create(
            FormAction::create('Send', 'Send')
        );

        $requires = RequiredFields::create(
            'FirstName',
            'LastName',
            'Email',
            'Contact',
            'CallingTime',
            'LiquidCapital',
            'TimeStart',
            'Area',
            'Experience',
            'Hear'
        );

        $form = new Form($this, __FUNCTION__, $fields, $actions, $requires);

        if ($formData = Session::get('FranchiseData')) {
            $form->loadDataFrom($formData);
        }

        return $form;

    }

    public function Send($data, Form $form) {
        Session::set('FranchiseData', $data);
        $from = $data['Email'];
        $to = $this->SendEmail;
        $subject = 'Franchise Information';
        $body = "First Name: " . $data['FirstName'] . "\r\n" .
            "Last Name: " . $data['LastName'] . "\r\n" .
            "Email: " . $data['Email'] . "\r\n" .
            "Contact: " . $data['Contact'] . "\r\n" .
            "Best Calling Time: " . $data['CallingTime'] . "\r\n" .
            "Liquid Capital: " . $data['LiquidCapital'] . "\r\n" .
            "Time Frame to Start: " . $data['TimeStart'] . "\r\n" .
            "In what area are you looking to invest in a franchise?: \r\n" . $data['Area'] . "\r\n" .
            "Business & Relevant Experience: \r\n" . $data['Experience'] . "\r\n" .
            "How did you hear about the Beard Papa’s franchise: \r\n" . $data['Hear'] . "\r\n";

        if(array_key_exists('Message', $data)) {
            $body .= "Message: " . $data['Message'] . "\r\n";
        }

        $email = new Email($from, $to, $subject, $body);

        $flag = $email->sendPlain();

        if($flag) {
            $result['Message'] = 'You have submission is successful, thank you.';
            $result['Type'] = 'good';
        } else {
            $result['Message'] = 'Sorry your submission is unsuccessful, please try again or contact us.';
            $result['Type'] = 'bad';
        }

        $result['BackURL'] = '/franchise';

        return $this->customise($result)->renderWith(array('ResultPage', 'Page'));
    }
}