<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TANJ POS')</title>
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary: #f59e0b;
            --dark: #0f172a;
            --light: #f8fafc;
            --muted: #64748b;
            --border: #e2e8f0;
            --success: #10b981;
            --danger: #ef4444;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        nav {
            background-color: var(--dark);
            padding: 0 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
        }
        .logo {
            color: #fff;
            font-size: 1.5rem;
            font-weight: 700;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .logo span {
            color: var(--secondary);
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 0.5rem;
        }
        nav a {
            color: #cbd5e1;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: all 0.2s;
        }
        nav a:hover,
        nav a.active {
            color: #fff;
            background-color: var(--primary);
        }
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
            min-height: calc(100vh - 140px);
        }
        h1 {
            margin-bottom: 1.5rem;
            color: var(--dark);
            font-size: 2rem;
        }
        h2 {
            margin-bottom: 1rem;
            color: var(--dark);
            font-size: 1.5rem;
        }
        p {
            margin-bottom: 1rem;
            color: var(--muted);
        }
        .card {
            background-color: #fff;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
            margin-bottom: 1.5rem;
        }
        .grid {
            display: grid;
            gap: 1.5rem;
        }
        .grid-4 {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }
        .grid-2 {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }
        .stat-card {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: #fff;
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
        }
        .stat-card h3 {
            font-size: 2.5rem;
            margin-bottom: 0.25rem;
        }
        .stat-card p {
            color: rgba(255,255,255,0.85);
            margin: 0;
        }
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: var(--primary);
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .btn:hover {
            background-color: var(--primary-dark);
        }
        .btn-secondary {
            background-color: var(--secondary);
        }
        .btn-secondary:hover {
            background-color: #d97706;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
        }
        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid var(--border);
        }
        th {
            background-color: var(--dark);
            color: #fff;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f1f5f9;
        }
        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .badge-active {
            background-color: #d1fae5;
            color: #065f46;
        }
        .badge-inactive {
            background-color: #fee2e2;
            color: #991b1b;
        }
        .badge-role {
            background-color: #dbeafe;
            color: #1e40af;
        }
        .hero {
            background: linear-gradient(135deg, var(--dark) 0%, #1e3a8a 100%);
            color: #fff;
            border-radius: 16px;
            padding: 3rem 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }
        .hero h1 {
            color: #fff;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .hero p {
            color: #cbd5e1;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 1.5rem;
        }
        .hero-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        footer {
            background-color: var(--dark);
            color: #94a3b8;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
        }
        @media (max-width: 768px) {
            nav .nav-container {
                flex-direction: column;
                height: auto;
                padding: 1rem 0;
            }
            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-container">
            <a href="{{ route('home') }}" class="logo">TANJ<span>POS</span></a>
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('customers') }}" class="{{ request()->routeIs('customers') ? 'active' : '' }}">Customers</a></li>
                <li><a href="{{ route('users') }}" class="{{ request()->routeIs('users') ? 'active' : '' }}">Users</a></li>
            </ul>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} TANJ POS. All rights reserved.</p>
    </footer>
</body>
</html>
