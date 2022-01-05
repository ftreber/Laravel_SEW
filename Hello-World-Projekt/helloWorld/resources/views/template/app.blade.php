<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initialscale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                       href="/dashboard">Dashboard </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('project') ? 'active' : '' }}" href="/project">Project <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('customer') ? 'active' : '' }}" href="/customer">Customer <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('cars') ? 'active' : '' }}" href="/cars">Cars <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

</div>

</body>
</html>

