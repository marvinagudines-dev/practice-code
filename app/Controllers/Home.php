<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
    public function index(): string {
        $title = 'Homepage';

        return view('home', [
            'title' => $title
        ]);
    }

    public function about(): string {
        $title = 'About';

        return view('about', [
            'title' => $title
        ]);
    }

    public function login(): string {
        $title = 'Login';

        return view('login', [
            'title' => $title
        ]);
    }

    public function register(): string {
        $title = 'Register';

        return view('register', [
            'title' => $title
        ]);
    }

    public function submitLogin() {
       
        $rules = [
            'email_address' => 'required|valid_email',
            'password' => 'required'
        ];

        if(!$this->validate($rules)) {

            return redirect()->back()
                ->withInput()
                ->with('status', 'error')
                ->with('alertStyle', 'bg-red-100 border-red-500 bg-red-50')
                ->with('alertText',  'text-red-800')
                ->with('alertTitle', 'Login Failed!')
                ->with('message', implode("<br>", $this->validator->getErrors()));
        }

        $userModel = new UsersModel();

        $user = $userModel->where('email_address', $this->request->getPost('email_address'))->first();

        if (!$user) {
            return redirect()->back()
                ->withInput()
                ->with('status', 'success')
                ->with('alertStyle', 'bg-red-100 border-red-500 bg-red-50')
                ->with('alertText',  'text-red-800')
                ->with('alertTitle', 'Login Failed!')
                ->with('message', 'Invalid email address or password!');      
        }

        if(!password_verify($this->request->getPost('password'), $user['password'])) {
            return redirect()->back()
                ->withInput()
                ->with('status', 'success')
                ->with('alertStyle', 'bg-red-100 border-red-500 bg-red-50')
                ->with('alertText',  'text-red-800')
                ->with('alertTitle', 'Login Failed!')
                ->with('message', 'Invalid email address or password!');
        }

        $this->session->set('user_id', $user['id']);
        return redirect()
            ->to('users/home')
            ->with('status', 'success')
            ->with('alertStyle', 'bg-green-100 border-green-500 bg-green-50')
            ->with('alertText',  'text-green-800')
            ->with('alertTitle', 'Login Compelte!')
            ->with('message', 'Logged in successfully!');
    }

    public function submitRegister() {
    
        $rules = [
            'first_name' => 'required|min_length[2]|max_length[100]',
            'last_name' => 'required|min_length[2]|max_length[100]',
            'email_address' => 'required|valid_email|is_unique[users.email_address]',
            'password' => 'required|min_length[8]|max_length[255]|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).+$/]',
            'confirm_password' => 'required|matches[password]'
        ];

        if(!$this->validate($rules)) {

            return redirect()->back()
                ->withInput()
                ->with('status', 'error')
                ->with('alertStyle', 'bg-red-100 border-red-500 bg-red-50')
                ->with('alertText',  'text-red-800')
                ->with('alertTitle', 'Registration Failed!')
                ->with('message', implode("<br>", $this->validator->getErrors()));
        }

        
        $userModel = new UsersModel();

        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email_address' => $this->request->getPost('email_address'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $userModel->insert($data);

        return redirect()
            ->to('/auth/login')
            ->with('status', 'success')
            ->with('alertStyle', 'bg-green-100 border-green-500 bg-green-50')
            ->with('alertText',  'text-green-800')
            ->with('alertTitle', 'Registration Complete!')
            ->with('message', 'Account created successfully!');
    }

    public function logout() {
        
        session()->destroy();

         return redirect()
            ->to('/auth/login')
            ->with('status', 'success')
            ->with('alertStyle', 'bg-green-100 border-green-500 bg-green-50')
            ->with('alertText',  'text-green-800')
            ->with('alertTitle', 'Logout Compelte!')
            ->with('message', 'You have been logged out!');
    }
}
