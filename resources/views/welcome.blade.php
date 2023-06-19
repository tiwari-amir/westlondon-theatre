<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WestLondonTheatre</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .jumbotron {
            background-image: url('https://c1.wallpaperflare.com/path/570/413/91/interior-theatre-theater-empty-theater-87d7d2e44fd62221f578a00975ca3cab.jpg');
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .jumbotron h1 {
            color: #fff;
            font-weight: bold;
            font-size: 3rem;
            margin-bottom: 2rem;
        }

        .jumbotron p {
            color: #fff;
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .jumbotron .btn-primary {
            background-color: #dc3545;
            border-color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ route('home') }}">WestLondonTheatre</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="text-center">
            <h1 class="display-4">Welcome to West London Theatre</h1>
            <p class="lead">Book tickets for the latest shows</p>
            <a class="btn btn-primary btn-lg" href="{{ route('events.index') }}" role="button">View Events</a>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
