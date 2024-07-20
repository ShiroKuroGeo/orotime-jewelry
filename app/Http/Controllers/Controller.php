<?php

namespace App\Http\Controllers;

use App\Http\Services\Services;

class Controller 
{   
    protected $services;

    public function __construct(Services $services){
        $this->services = $services;
    }

    public function logout(){
        return $this->services->logout();
    }
}
