<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My POS')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #1f2937;
        }

        header {
            padding: 24px;
            background: #1e293b;
            color: white;
        }

        header h1 {
            margin: 0 0 16px;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 1000px;
            margin: 32px auto;
            padding: 24px;
            background: white;
            border-radius: 12px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 14px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        th {
            background: #e2e8f0;
        }

        .button {
            display: inline-block;
            padding: 12px 18px;
            margin: 8px 8px 0 0;
            border-radius: 6px;
            background: #2563eb;
            color: white;
            text-decoration: none;
        }

        footer {
            padding: 20px;
            text-align: center;
            color: #64748b;
        }
    </style>
</head>
<body>
    <header>
        <h1>My POS</h1>

        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('customers.index') }}">
                Customer Accounts
            </a>
            <a href="{{ route('users.index') }}">
                User Accounts
            </a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} My POS | IT0049 TFA5
    </footer>
</body>
</html>