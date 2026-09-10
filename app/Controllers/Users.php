<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $data = [
            [
                'id' => 1, 
                'username' => 'juan_santos',
                'fullname' => 'Juan Santos',
                'role' => 'Administrator'
            ],
            [
                'id' => 2, 
                'username' => 'maria_garcia',
                'fullname' => 'Maria Garcia',
                'role' => 'Manager'
            ],
            [
                'id' => 3, 
                'username' => 'rafael_cruz',
                'fullname' => 'Rafael Cruz',
                'role' => 'Cashier'
            ],
            [
                'id' => 4, 
                'username' => 'angela_lopez',
                'fullname' => 'Angela Lopez',
                'role' => 'Cashier'
            ],
            [
                'id' => 5, 
                'username' => 'daniel_torres',
                'fullname' => 'Daniel Torres',
                'role' => 'Staff'
            ],
        ];
        return view('users', ['users' => $data]);
    }
  
}
