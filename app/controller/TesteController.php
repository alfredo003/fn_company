<?php
namespace app\controller;
use app\core\Controller;

class TesteController extends Controller{
     
     public function index()
     {
       $this->load('home/main',[
        'name'=>'IPNamibe'
       ]);
  
     }
}