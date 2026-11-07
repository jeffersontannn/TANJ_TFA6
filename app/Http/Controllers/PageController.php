<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;

class PageController extends Controller
{
    public function home()
    {
        $customerCount = Customer::count();
        $userCount = User::count();

        return view('pages.home', compact('customerCount', 'userCount'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
