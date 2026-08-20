<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require_once __DIR__ . '/../middlewares/StudentMiddleware.php';

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // CHANGE THIS TO true OR false TO CONTROL PROFILE ACCESS
        $_SESSION['student_access'] = true;

        $this->call->view('student');
    }

    public function profile()
    {
        $middleware = new StudentMiddleware();

        return $middleware->handle(function () {

            $student = [
                'student_id' => 'MCC2024-00200',
                'name' => 'Zean Rollin Mantala',
                'course' => 'BS Information Technology',
                'year' => '3rd Year',
                'section' => '3F4',
                'email' => 'zeanmantala18@gmail.com',
                'contact' => '09565593762',
                'address' => 'Tibag, Calapan City',
                'skills' => 'Programming',
                'hobbies' => 'Playing Guitar, Drums, Drawing, Swimming, Gaming',
                'description' => 'A BSIT student interested in programming, technology, and learning new skills.',
                'facebook' => 'https://www.facebook.com/share/1Dht8RnjNC/',
                'github' => 'https://github.com/ZeanGeeks'
            ];

            return $this->call->view('student_profile', $student);
        });
    }
}