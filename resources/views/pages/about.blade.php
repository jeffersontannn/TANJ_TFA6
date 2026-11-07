@extends('layouts.app')

@section('title', 'About - TANJ POS')

@section('content')
    <div class="card">
        <h1>About TANJ POS</h1>
        <p>TANJ Point of Sale is a modern system designed to streamline retail and sales operations. This Laravel rebuild focuses on a clean, maintainable architecture.</p>
    </div>

    <div class="grid grid-2">
        <div class="card">
            <h2>Our Mission</h2>
            <p>To provide businesses with an intuitive, efficient point-of-sale solution that simplifies daily transactions and customer management.</p>
        </div>
        <div class="card">
            <h2>Technology Stack</h2>
            <p>Built with Laravel 12, PHP 8.2, Blade templating, and SQLite for a lightweight development setup.</p>
        </div>
        <div class="card">
            <h2>Features</h2>
            <p>Customer account management, user role tracking, responsive UI, and static sample data for demonstration.</p>
        </div>
        <div class="card">
            <h2>Architecture</h2>
            <p>Follows Laravel MVC conventions with dedicated controllers for pages, customers, and users.</p>
        </div>
    </div>
@endsection
