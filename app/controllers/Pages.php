<?php

//    NOTE TO SELF: I think it would be a good idea to create an interface which lays out some rules for my classes such as must include index method, ect.

    class Pages{
        public function __construct()
        {

        }
        public function index(){
            echo "this is index";
        }
    public function about($id){
            echo "this is about $id";
    }
    }
