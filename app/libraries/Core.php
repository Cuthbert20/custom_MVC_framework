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
            // Calling getUrl in the constructor which will of course run every time we create an instance of the Core class.
//            print_r($this->getUrl());
            $url = $this->getUrl();

//            Look in controllers for first value
//            Also we are defining the path/filename as if we were in index.php because that is where the instance of the Core class will be created.
            if(file_exists("../app/controllers/". ucwords($url[0]) . ".php")){
                echo "Hit";
            }
        }

        public function getUrl(){
            // Using $_GET super global to get params from the browser url.
//            echo $_GET['url'];
            if(isset($_GET['url'])){
//                removing forward slash at end of params if one exists using rtrim function
                $url = rtrim($_GET['url'], "/");
//                using filter_var to filter the $url variable so that it won't have any chars that a url shouldn't have
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode("/", $url);
                return $url;
            }
        }
    }