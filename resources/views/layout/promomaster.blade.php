<!DOCTYPE html>
<html>
    <head>
        <title>The Overwatch Seasons</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link rel="icon" type="image/png" href="/favicon.png">
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" type="text/css" href="/css/flag-icon.css">
        <link rel="stylesheet" type="text/css" href="/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="/css/roles-icon.css">
        @yield('seo')
        <script src="/js/app.js"></script>
        {{-- Shink testing --}}
        <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    </head>
    <body class="body-inner">
        <div class="promo-header">

                <div  class="uk-margin-medium-bottom uk-padding-top uk-text-center ">
                    <div>
                        <img class="logo-main-page uk-animation-fade" src="/svg/logo.svg">
                        <div class="main-season uk-animation-shake">Season One</div>
                        @include('layout.main-nav')
                    </div>
                </div> {{-- Slider stop --}}

            </div>

        <div class="content-margin">
                @yield('content')
        </div>
    </body>
    <footer>
        @include('layout.footer')
    </footer>
</html>
