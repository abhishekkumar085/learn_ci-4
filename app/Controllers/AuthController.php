<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function registerForm()
    {
        helper('form');
        return view('register_form');
    }

    public function register()
    {
        // Validate form input (you may want to add more validation rules)
        $this->validate([
            'username' => 'required|min_length[5]|max_length[20]|is_unique[users.username]',
            'password' => 'required|min_length[8]',
            'email'    => 'required|valid_email|is_unique[users.email]',
        ]);

        // Hash the password
        $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        // Insert user data into the database
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $hashedPassword,
            'email'    => $this->request->getPost('email'),
        ];

        // $db = \Config\Database::connect();
        $db = db_connect();

        $builder = $db->table('users2');
        $builder->insert($data);

        return redirect()->to('/login')->with('success', 'Registration successful. Please log in.');
    }

    public function loginForm()
    {
        helper('form');
        return view('login_form');
    }

    public function login()
    {
        // Validate form input
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $db = \Config\Database::connect();
        $builder = $db->table('users2');
        $user = $builder->where('username', $username)->get()->getRow();

        if ($user && password_verify($password, $user->password)) {
            // Login successful, store user data in session
            $session = session();
            $session->set('user_id', $user->id);
            $session->set('username', $user->username);

            return redirect()->to('/dashboard')->with('success', 'Login successful.');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password.');
        }
    }

    public function logout()
    {
        // Destroy the session
        $session = session();
        $session->destroy();

        return redirect()->to('/login')->with('success', 'Logout successful.');
    }

    public function dashboard()
{
    // Check if the user is logged in
    if (session()->get('user_id')) {
        // Load the 'dashboard' view
        return view('dashboard');
    } else {
        // If not logged in, redirect to the login page
        return redirect()->to('/login');
    }
}
}
