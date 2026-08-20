<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require_once __DIR__ . '/../middlewares/StudentMiddleware.php';

class StudentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Student Home
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        /*
        |--------------------------------------------------------------
        | Change this to true or false to control profile access.
        |--------------------------------------------------------------
        */

        $_SESSION['student_access'] = true;

        $this->call->view('student');
    }


    /*
    |--------------------------------------------------------------------------
    | Student Profile
    |--------------------------------------------------------------------------
    */

    public function profile()
    {
        $middleware = new StudentMiddleware();

        return $middleware->handle(function () {

            $student = [

                'student_id' => 'MCC2024-00181',

                'name' => 'Jerome Limguangco',

                'course' => 'BS Information Technology',

                'year' => '3rd Year',

                'section' => '3F4',

                'email' => 'jeromelimguangco324@gmail.com',

                'contact' => '09981647322',

                'address' => 'Masipit, Calapan city',

                'skills' => 'Designing',

                'hobbies' => 'Online Games, Playing Basketball',

                'description' =>
                    'A BS Information Technology student interested in learning new skills.',

                'facebook' =>
                    'https://www.facebook.com/share/1BPtrhr2u4/',

                'github' =>
                    'https://github.com/'

            ];

            return $this->call->view(
                'student_profile',
                $student
            );

        });
    }
}
