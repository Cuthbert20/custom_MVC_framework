<?php
    /*
     * App Core Class
     * Creates URL & loads core controller
     * URL FORMAT - /controller/method/params
     */
    class Core{
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct()
        {
            $this->getUrl();
        }

        public function getUrl(){
            // Using $_GET super global to get params from the browser url.
            echo $_GET['url'];
//            if($_GET['url']){}
        }
    }