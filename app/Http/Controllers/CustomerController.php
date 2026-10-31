<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'Ginny Alberto',
                'email' => 'ginny@example.com',
                'phone' => '09170000001',
            ],
            [
                'id' => 2,
                'name' => 'Jay Park',
                'email' => 'jay@example.com',
                'phone' => '09170000002',
            ],
            [
                'id' => 3,
                'name' => 'Jeo Ong',
                'email' => 'jeo@example.com',
                'phone' => '09170000003',
            ],
            [
                'id' => 4,
                'name' => 'Kyla Abad',
                'email' => 'kyla@example.com',
                'phone' => '09170000004',
            ],
            [
                'id' => 5,
                'name' => 'Jake Yoon',
                'email' => 'jake@example.com',
                'phone' => '09170000005',
            ],
        ];

        return view('customers', compact('customers'));
    }
}