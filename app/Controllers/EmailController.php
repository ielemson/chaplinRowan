<?php

namespace App\Controllers;


class EmailController extends BaseController
{
    public function index()
    {
        $email = \Config\Services::email();
        $email->setFrom('ielemson@outlook.com', 'Your Name');
        $email->setTo('ielemson@gmail.com');
        $email->setBCC('ielemson@yahoo.com');
        
        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');
        
        $email->send();
    }
}