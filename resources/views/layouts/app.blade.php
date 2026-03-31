<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>This is Main Page</h1>

    <header>HI I am the header</header>

    <img src="{{ asset('Images/JOCKER.png') }}" width="500px" height="500px">

    @yield('data')

    <footer>All rights reserved @2026</footer>
</body>
</html>

//Create three views , first is admin, second is user and third is group of user, there on the admin page you have to add your image , in users you have to add unorderes list of five courses and in third view, group of users, you have to display the name , marks and grade of five stdents and their should be one main layout folder, you have to create myAPP, on myAPP the content will be display in the form of navigation, and for footer you have to include one landscape image, you have to set the width and height there.