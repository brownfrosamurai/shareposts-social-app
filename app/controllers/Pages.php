<?php
    class Pages extends Controller {
        public function __construct() {
            
        }

        public function index() {
            $data =  [
                'title' => 'Shareposts',
                'description' => 'simple social network built on the Katana framework'
            ];

            $this->view('pages/index', $data);
        }
        
        public function about() {
            $data = [
                'title' => 'About Us',
                'description' => 'App to share post with other users'
            ];
            
            $this->view('pages/about', $data);
        }
    }