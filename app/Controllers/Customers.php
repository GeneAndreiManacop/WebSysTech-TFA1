<?php

namespace App\Controllers;

class Customers extends BaseController
{
    
    public function index(): string
    {
        $data = [
            [
                'id' => 1, 
                'fullname' => 'Andrea Santos',
                'email' => 'andrea.santos@example.com',
                'phone' => '09171234567'
            ],
            [
                'id' => 2, 
                'fullname' => 'Miguel Reyes',
                'email' => 'miguel.reyes@example.com',
                'phone' => '09281234567'
            ],
            [
                'id' => 3, 
                'fullname' => 'Patricia Lim',
                'email' => 'patricia.lim@example.com',
                'phone' => '09391234567'
            ],
            [
                'id' => 4, 
                'fullname' => 'Carlo Mendoza',
                'email' => 'carlo.mendoza@example.com',
                'phone' => '09451234567'
            ],
            [
                'id' => 5, 
                'fullname' => 'Sofia Navarro',
                'email' => 'sofia.navarro@example.com',
                'phone' => '09561234567'
            ],
        ];
        return view('customers', ['customers' => $data]);
    }
  
}
