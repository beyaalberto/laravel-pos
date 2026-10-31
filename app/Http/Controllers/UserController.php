<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Ashley Garcia',
                'email' => 'ashley@example.com',
                'role' => 'Administrator',
            ],
            [
                'id' => 2,
                'name' => 'Jeorella Gatchalian',
                'email' => 'jeorella@example.com',
                'role' => 'Manager',
            ],
            [
                'id' => 3,
                'name' => 'Rei Germar',
                'email' => 'rei@example.com',
                'role' => 'Cashier',
            ],
            [
                'id' => 4,
                'name' => 'Lierge Perey',
                'email' => 'lierge@example.com',
                'role' => 'Cashier',
            ],
            [
                'id' => 5,
                'name' => 'Jisoo Kim',
                'email' => 'jisoo@example.com',
                'role' => 'Staff',
            ],
        ];

        return view('users', compact('users'));
    }
}