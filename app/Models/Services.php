<?php namespace App\Models;

use CodeIgniter\Model;

class Services extends Model {

    protected $table = 'services';
    protected $allowedFields =['header','img','description','slug'];

    
    public function getServices($slug=null){
     
        
        if(! $slug){
            return $this->findAll('3','0');
        }

        return $this->asArray()->where(['slug'=>$slug])->first();
    }



    public function getServiceHeaders($slug=null){
     
        
        if(! $slug){
            return $this->findAll();
        }

        return $this->asArray()->where(['slug'=>$slug])->first();
    }
} 