<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'role' => 'Administrator',
                'status' => 'Active',
            ],
            [
                'id' => 2,
                'name' => 'Cashier One',
                'email' => 'cashier1@example.com',
                'role' => 'Cashier',
                'status' => 'Active',
            ],
            [
                'id' => 3,
                'name' => 'Cashier Two',
                'email' => 'cashier2@example.com',
                'role' => 'Cashier',
                'status' => 'Inactive',
            ],
            [
                'id' => 4,
                'name' => 'Store Manager',
                'email' => 'manager@example.com',
                'role' => 'Manager',
                'status' => 'Active',
            ],
            [
                'id' => 5,
                'name' => 'Shift Supervisor',
                'email' => 'supervisor@example.com',
                'role' => 'Supervisor',
                'status' => 'Active',
            ],
        ];

        return view('pages.users', compact('users'));
    }
}
