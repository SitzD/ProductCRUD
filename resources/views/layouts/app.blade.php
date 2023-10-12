<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products CRUD</title>

    @include('libraries.styles')


</head>
<body>

    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd;">

        <!-- Links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-dark" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/">Products</a>
        </li>
        </ul>
    </nav>

    @yield('content')

    @include('libraries.scripts')
</body>
</html>

