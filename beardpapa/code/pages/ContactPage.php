<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 27/07/15
 * Time: 2:18 PM
 */
class ContactPage extends Page {

    private static $db = array(
        'SendEmail' => 'Varchar(50)'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            TextField::create('SendEmail', 'Send Email Address')
        ), 'Metadata');

        return $fields;
    }
}

class ContactPage_Controller extends Page_Controller {
    private static $allowed_actions = array(
        'Form'
    );

    public function Form() {

        $fields = FieldList::create(
            TextField::create('Name', 'Name')->addExtraClass('col-sm-12 col-xs-12'),
            TextField::create('Email', 'Email')->addExtraClass('col-sm-12 col-xs-12'),
            TextField::create('Subject', 'Subject')->addExtraClass('col-sm-12 col-xs-12'),
            TextareaField::create('Message', 'Message')->addExtraClass('col-sm-12 col-xs-12')
        );

        $actions = FieldList::create(
            FormAction::create('Send', 'Send')->addExtraClass('btn btn-primary')
        );

        $requires = RequiredFields::create(
            'Name',
            'Email',
            'Subject',
            'Message'
        );

        $form = new Form($this, __FUNCTION__, $fields, $actions, $requires);

        $form->addExtraClass('col-sm-8 col-sm-offset-2 col-xs-12');

        if ($formData = Session::get('ContactData')) {
            $form->loadDataFrom($formData);
        }

        return $form;

    }

    public function Send($data, Form $form) {
        Session::set('ContactData', $data);

        $from = $data['Email'];
        $to = $this->SendEmail;
        $subject = $data['Subject'] . ' - through beardpapa.co.nz contact form';
        $body = $data['Message'];

        $email = new Email($from, $to, $subject, $body);

        $flag = $email->sendPlain();

        if($flag) {
            $result['Message'] = 'You submission is successful, thank you.';
            $result['Type'] = 'good';
            Session::clear('ContactData');
        } else {
            $result['Message'] = 'Sorry your submission is unsuccessful, please try again or call our branch phone number.';
            $result['Type'] = 'bad';
        }

        $result['Title'] = 'Contact Us';

        $result['BackURL'] = '/contact-us';

        return $this->customise($result)->renderWith(array('ResultPage', 'Page'));
    }

}