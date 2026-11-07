<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $customers = [
            [
                'full_name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '123-456-7890',
            ],
            [
                'full_name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '098-765-4321',
            ],
            [
                'full_name' => 'Bob Johnson',
                'email' => 'bob.johnson@example.com',
                'phone' => '555-123-4567',
            ],
            [
                'full_name' => 'Alice Williams',
                'email' => 'alice.williams@example.com',
                'phone' => '555-987-6543',
            ],
            [
                'full_name' => 'Charlie Brown',
                'email' => 'charlie.brown@example.com',
                'phone' => '555-555-5555',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }

        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Admin User',
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Cashier One',
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Cashier Two',
            ],
            [
                'username' => 'manager',
                'full_name' => 'Store Manager',
            ],
            [
                'username' => 'supervisor',
                'full_name' => 'Shift Supervisor',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
