<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background: #0B6623;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        nav {
            background: #0B6623;
            color: white;
            padding: 1rem 2rem;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            color: #9DC183;
        }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            background: #9DC183;
            border-radius: 8px;
            box-shadow: 0 4px 15px #E3B448;
            flex: 1;
        }
        h1 {
            color: #333;
            margin-bottom: 1rem;
        }
        footer {
            text-align: center;
            padding: 2rem;
            background: #0B6623;
            color: white;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('projects') }}">Projects</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>