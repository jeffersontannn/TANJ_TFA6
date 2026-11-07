<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '123-456-7890',
                'address' => '123 Main Street, Springfield',
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '098-765-4321',
                'address' => '456 Oak Avenue, Rivertown',
            ],
            [
                'id' => 3,
                'name' => 'Bob Johnson',
                'email' => 'bob.johnson@example.com',
                'phone' => '555-123-4567',
                'address' => '789 Pine Road, Lakeside',
            ],
            [
                'id' => 4,
                'name' => 'Alice Williams',
                'email' => 'alice.williams@example.com',
                'phone' => '555-987-6543',
                'address' => '321 Elm Street, Hilltop',
            ],
            [
                'id' => 5,
                'name' => 'Charlie Brown',
                'email' => 'charlie.brown@example.com',
                'phone' => '555-555-5555',
                'address' => '654 Maple Drive, Valleyview',
            ],
        ];

        return view('pages.customers', compact('customers'));
    }
}
