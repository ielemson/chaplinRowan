<?php

namespace App\Controllers;
use App\Models\Services;

class ContactController extends BaseController
{


    public function index(){

        $data['banner_caption'] = "Contact Us";
		$data['banner_img'] = "contact-banner.jpg";
		$data['title'] = "Contact :: Chaplin Rowan";
		$data['active_contact'] = "active";
		$services  = new Services();
		$data['services'] = $services->getServices();
		$data['serviceHeaders'] = $services->getServiceHeaders();
		return view('pages/about/contact',$data);

    }

    public function sendContact()
    {
       

        helper(['form', 'url']);
         
            $data = [
                'Fname' => $this->request->getVar('fullName'),
                'email'  => $this->request->getVar('email'),
                'phone'  => $this->request->getVar('phone'),
                'subject'  => $this->request->getVar('subject'),
                'enquiry'  => $this->request->getVar('enquiry')
                ];
    
        //    return $this->response->setJSON($data);
        // $validation =  \Config\Services::validation();


        // $validation->setRules([
        //     'fullName' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required|min_length[10]',
        //     'subject' => 'required',
        //     'enquiry' => 'required',
        // ]);

        if (! $this->validate([
            'fullName' => 'required',
            'email' => 'required',
            'phone' => 'required|min_length[10]',
            'subject' => 'required',
            'enquiry' => 'required',
        ],

        [   // Errors
            'fullName' => [
                'required' => 'name is required'
            ],
            'email' => [
                'required' => 'email required',
            ],

            'phone'=>[
                'required'=>'phone required'
            ],

            'subject'=>[
                'required'=>'subject required'
            ],

            'enquiry'=>[
                'required'=>' enquiry required'
            ]
              
        ]
        
        ))
        {

            $data['banner_caption'] = "Contact Us";
            $data['banner_img'] = "contact-banner.jpg";
            $data['title'] = "Contact :: Chaplin Rowan";
            $data['active_contact'] = "active";
            $services  = new Services();
            $data['services'] = $services->getServices();
            $data['serviceHeaders'] = $services->getServiceHeaders();
            $data['validation'] = $this->validator;
            return view('pages/about/contact',$data);
        }
        else
        {
         
            $to = $this->request->getVar('email');
            $message = $this->request->getVar('enquiry');
            $email = \Config\Services::email();
            $email->setFrom('ielemson@outlook.com', 'your Title Here');
            $email->setTo($to);
            $email->setSubject('Your Subject here | tutsmake.com');
            $email->setMessage($message);
            
                  
            $data['banner_caption'] = "Contact Us";
            $data['banner_img'] = "contact-banner.jpg";
            $data['title'] = "Contact :: Chaplin Rowan";
            $data['active_contact'] = "active";
            $services  = new Services();
            $data['services'] = $services->getServices();
            $data['serviceHeaders'] = $services->getServiceHeaders();
            $data['validation'] = $this->validator;
           
            
            if($email->send()){
                return view('pages/about/contact',$data);
            }else{
                $data = $email->printDebugger(['headers']);
                print_r($data);
                }
      
        }
    }


}