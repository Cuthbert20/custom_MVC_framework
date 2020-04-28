<?php
//    This class ie Post is for demo, testing, and how to.
    class Post{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function getPosts(){
            $this->db->query('SELECT * FROM posts');

            return $this->db->resultSet();

        }
    }