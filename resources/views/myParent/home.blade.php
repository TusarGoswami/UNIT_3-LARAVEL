<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <style>
        body { margin: 0; font-family: Arial; }
        nav { background: #333; padding: 15px; }
        nav a { color: white; margin: 10px; text-decoration: none; }
        nav a:hover { color: yellow; }
        .container { padding: 20px; }
        footer { background: #111; color: white; text-align: center; padding: 10px; position: fixed; width: 100%; bottom: 0; }
        img { width: 100%; height: 300px; object-fit: cover; }
    </style>
</head>
<body>

<nav>
    <a href="/home">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <a href="/profile">Profile</a>
</nav>

<img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="Landscape Image">

<div class="container">
    @yield('content')
</div>

<footer>
    © {{ date('Y') }} My Website. All rights reserved.
</footer>

</body>
</html>