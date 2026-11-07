@extends('layouts.app')

@section('title', 'Home - TANJ POS')

@section('content')
    <div class="hero">
        <h1>Welcome to TANJ Point of Sale</h1>
        <p>A modern, streamlined POS system built with Laravel for retail and sales operations.</p>
        <div class="hero-actions">
            <a href="{{ route('customers') }}" class="btn btn-secondary">View Customers</a>
            <a href="{{ route('users') }}" class="btn">View Users</a>
        </div>
    </div>

    <div class="grid grid-4">
        <div class="stat-card">
            <h3>{{ $customerCount }}</h3>
            <p>Customers</p>
        </div>
        <div class="stat-card">
            <h3>{{ $userCount }}</h3>
            <p>Users</p>
        </div>
        <div class="stat-card">
            <h3>4</h3>
            <p>Pages</p>
        </div>
        <div class="stat-card">
            <h3>Laravel</h3>
            <p>Framework</p>
        </div>
    </div>

    <div class="card" style="margin-top: 2rem;">
        <h2>Quick Overview</h2>
        <p>This Laravel rebuild uses a real SQLite database with Eloquent models, migrations, and seeders.</p>
        <p>Use the navigation above to explore the Customer Accounts and User Accounts pages.</p>
    </div>
@endsection
