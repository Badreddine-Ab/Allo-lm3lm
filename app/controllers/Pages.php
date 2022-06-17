<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('pages/choice');
      }

      $data = [
        'title' => 'Allo lm3lm',
        'description' => 'Simple service free lance network build with mvc'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }

    

    
    public function choice(){
      $data = [
        
      ];

      $this->view('pages/choice', $data);
    }
  }