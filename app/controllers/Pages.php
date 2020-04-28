<?php

//    NOTE TO SELF: I think it would be a good idea to create an interface which lays out some rules for my classes such as must include index method, ect.
//    Extending base Controller class in libraries dir
    class Pages extends Controller {
        public function __construct()
        {

        }
        public function index(){
            $data = ['title'=> 'KnowlMVC'];
//            we are passing in an array that we will then have access to in the view ie in the browser
            $this->view('pages/index', $data);

        }
        public function about(){
            $data = ['title'=> 'About Us'];
            $this->view('pages/about',$data);
        }
    }
