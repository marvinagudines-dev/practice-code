<?php
    namespace App\Controllers;

    class UserController extends BaseController {

        public function index(): string {
            return view('users/index', [
                'title' => 'User Home'
            ]);
        }

        public function profile() {
            
            return view('users/profile', [
                'title' => 'User Profile'
            ]);
        }
    }
?>