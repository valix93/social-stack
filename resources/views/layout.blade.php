<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title') - Social Stack</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma-rtl.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>

<body>
<nav class="navbar is-fixed-top is-light" role="navigation" aria-label="main navigation">
    <div class="navbar-brand navbar-start--centered">
        <a class="navbar-item navbar-item-logo" href="{{ route('posts.index') }}"></a>
    </div>
</nav>

<section class="section" id="notification-section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-8">
                @if (session('notification'))
                    <div class="notification is-primary">
                        {{ session('notification') }}
                    </div>
                @endif @yield('content')
            </div>
        </div>
    </div>
</section>
<nav id="footer-nav" class="navbar is-fixed-bottom is-light">
    <div class="navbar-start navbar-bottom-div">
        <p class="has-text-centered mt-4">
            <strong class="has-text-gray">Social Stack</strong> |
            <a class="is-primary" href="https://github.com/valix93/">Valentin* Lipari</a>
        </p>
    </div>
</nav>

</body>
</html>
