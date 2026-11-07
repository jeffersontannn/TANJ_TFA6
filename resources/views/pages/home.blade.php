@extends('layouts.app')

@section('title', 'Home - TANJ POS')

@section('content')
    <div class="hero">
        <h1>Welcome to TANJ Point of Sale</h1>
        <p>A modern, powerful POS system built with Laravel to streamline your retail operations, manage customers, and track sales efficiently.</p>
        <div class="hero-actions">
            <a href="{{ route('customers') }}" class="btn btn-secondary">View Customers</a>
            <a href="{{ route('users') }}" class="btn">View Users</a>
            <a href="{{ route('about') }}" class="btn btn-outline" style="border-color: #fff; color: #fff;">Learn More</a>
        </div>
    </div>

    <div class="grid grid-4">
        <div class="stat-card">
            <div class="stat-card-icon">👥</div>
            <h3>{{ $customerCount }}</h3>
            <p>Customers</p>
        </div>
        <div class="stat-card">
            <div class="stat-card-icon">👤</div>
            <h3>{{ $userCount }}</h3>
            <p>Users</p>
        </div>
        <div class="stat-card">
            <div class="stat-card-icon">📄</div>
            <h3>4</h3>
            <p>Pages</p>
        </div>
        <div class="stat-card">
            <div class="stat-card-icon">⚡</div>
            <h3>Laravel</h3>
            <p>Framework</p>
        </div>
    </div>

    <div style="margin-top: 3rem;">
        <h2 style="text-align: center; margin-bottom: 2rem;">Why Choose TANJ POS?</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon primary">💰</div>
                <h3>Fast Transactions</h3>
                <p>Process sales quickly with an intuitive interface designed for speed and efficiency.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon secondary">📊</div>
                <h3>Real-time Reports</h3>
                <p>Get instant insights into your sales, inventory, and customer data.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon success">🔒</div>
                <h3>Secure & Reliable</h3>
                <p>Built with Laravel's security best practices to keep your data safe.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon info">☁️</div>
                <h3>Cloud Ready</h3>
                <p>Easily deploy and scale your POS system on any cloud platform.</p>
            </div>
        </div>
    </div>

    <div class="cta-section">
        <h2>Ready to Get Started?</h2>
        <p>Explore the customer and user management features to see how TANJ POS can help your business.</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('customers') }}" class="btn" style="background: #fff; color: var(--primary); box-shadow: none;">View Customers</a>
            <a href="{{ route('users') }}" class="btn btn-secondary">View Users</a>
        </div>
    </div>
@endsection
