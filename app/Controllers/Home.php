<?php

namespace App\Controllers;

use App\Models\Services;

// $db      = \Config\Database::connect();
// $builder = $db->table('services');



class Home extends BaseController
{
	public function index()
	{
		// return view('home');
		$services  = new Services();
		// $services = $builder->limit(10);
		$data['services'] = $services->getServices();
		$data['serviceHeaders'] = $services->getServiceHeaders();
		$data['status'] = "active";
		return view('pages/welcome',$data);
	
	}
	public function indexCopy()
	{
		// return view('home');
		$services  = new Services();
		// $services = $builder->limit(10);
		$data['services'] = $services->getServices();
		$data['serviceHeaders'] = $services->getServiceHeaders();
		return view('pages/home',$data);
	
	}

	public function hse()
	{
	
		$data['banner_caption'] = "Health, Safety & Environment (HSE)";
		$data['banner_img'] = "hse-policy.png";
		$data['title'] = "HSE :: Chaplin Rowan";
		$data['active_policy'] = "active";
		$services  = new Services();
		$data['services'] = $services->getServices();
		$data['serviceHeaders'] = $services->getServiceHeaders();
		return view('pages/policies/hse',$data);
	
	}


	public function qassure()
	{
	
		$data['banner_caption'] = "Quality Assurance";
		$data['banner_img'] = "quality-assurance.png";
		$data['title'] = "Quality Assurance :: Chaplin Rowan";
		$data['active_policy'] = "active";
		$services  = new Services();
		$data['services'] = $services->getServices();
		$data['serviceHeaders'] = $services->getServiceHeaders();
		return view('pages/policies/quality-assurance',$data);
	
	}
	public function coportatePolicy()
	{
	
		$data['banner_caption'] = "Coporate Policy";
		$data['banner_img'] = "corporate.png";
		$data['title'] = "Coporate Policy :: Chaplin Rowan";
		$data['active_policy'] = "active";
		$services  = new Services();
		$data['services'] = $services->getServices();
		$data['serviceHeaders'] = $services->getServiceHeaders();
		return view('pages/policies/coporate-policy',$data);
	
	}


	public function create()
{
    $model = new Services();

    if ($this->request->getMethod() === 'post' && $this->validate([
            'header' => 'required|min_length[3]|max_length[255]',
            'description'  => 'required',
			'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,4096]',
            ],
        ]))
    {
		$serviceImg = $this->request->getFile('file');
		// $newName = $img->getRandomName();
		$serviceImg->move('./images');
		// $serviceImg->move(WRITEPATH . '/public/images');
		// $serviceImg = $this->request->getFile('file')->store('/public/images');
		

        $model->save([
            'header' => $this->request->getPost('header'),
            'slug'  => url_title($this->request->getPost('header'), '-', TRUE),
            'description'  => $this->request->getPost('description'),
			'img' =>  $serviceImg->getName(),
        ]);

        return redirect()->to('/');

    }
    else
    {
				$data['banner_caption'] = "Create Service";
				$data['banner_img'] = "shop-banner.jpg";
				$data['title'] = "Create :: Chaplin Rowan";
				$services  = new Services();
				$data['services'] = $services->getServices();
				$data['serviceHeaders'] = $services->getServiceHeaders();
				return view('pages/create',$data);
    }
}


	public function service($slug){
		$service = new Services();
		$data['banner_caption'] = "Our Services";
		$data['banner_img'] = "shop-banner.jpg";
		$data['title'] = "Service :: Chaplin Rowan";
		$data['active_service'] = "active";
		$data['service']=$service->getServices($slug);
		$data['services'] = $service->getServices();
		$data['serviceHeaders']=$service->getServiceHeaders();
		return view('pages/services/service',$data);
	}


	public function services(){
		$service = new Services();
		$data['banner_caption'] = "Our Services";
		$data['banner_img'] = "about-banner.jpg";
		$data['status'] = "active";
		$data['services'] = $service->getServices();
		$data['serviceHeaders'] = $service->getServiceHeaders();
		return view('pages/services/services',$data);
	}

	public function about(){
		// echo view('templates/header');
		$data['banner_caption'] = "About Us";
		$data['banner_img'] = "about-banner.jpg";
		$data['active_about'] = "active";
		$services  = new Services();
		$data['services'] = $services->getServices();
		$data['serviceHeaders'] = $services->getServiceHeaders();
		return view('pages/about/about',$data);
	}
	public function contact(){
		// echo view('templates/header');
		$data['banner_caption'] = "Contact Us";
		$data['banner_img'] = "contact-banner.jpg";
		$data['title'] = "Contact :: Chaplin Rowan";
		$data['active_contact'] = "active";
		$services  = new Services();
		$data['services'] = $services->getServices();
		$data['serviceHeaders'] = $services->getServiceHeaders();
		return view('pages/about/contact',$data);
	
		
	}


	public function ourMission(){
		// echo view('templates/header');
		$data['banner_caption'] = "Our Mission";
		$data['banner_img'] = "contact-banner.jpg";
		$data['title'] = "Our Mision :: Chaplin Rowan";
		$data['active_about'] = "active";
		$services  = new Services();
		$data['services'] = $services->getServices();
		$data['serviceHeaders'] = $services->getServiceHeaders();
		return view('pages/about/mission',$data);
	
		
	}
	public function ourVision(){
		// echo view('templates/header');
		$data['banner_caption'] = "Our Vision";
		$data['banner_img'] = "contact-banner.jpg";
		$data['title'] = "Our Vision :: Chaplin Rowan";
		$data['active_about'] = "active";
		$services  = new Services();
		$data['services'] = $services->getServices();
		$data['serviceHeaders'] = $services->getServiceHeaders();
		return view('pages/about/vision',$data);
	
		
	}

}
