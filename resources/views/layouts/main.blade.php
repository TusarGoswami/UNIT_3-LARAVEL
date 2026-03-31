<!DOCTYPE html>
<html>
<head>
    <title>MyAPP</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
        }
        nav {
            background: #333;
            padding: 10px;
        }
        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }
        footer {
            margin-top: 20px;
            text-align: left;
        }
        footer img {
            width: 30%;
            height: 250px;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/admin">Admin</a>
        <a href="/users">Users</a>
        <a href="/group">Group Users</a>
    </nav>

    <div style="padding:20px;">
        @yield('content')
    </div>

    <footer>
        <img src="{{ asset('images/footer.jpg') }}" alt="Footer Image">
    </footer>

</body>
</html>