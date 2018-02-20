<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link rel="icon" type="image/png" href="/favicon.png">
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" type="text/css" href="/css/flag-icon.css">
        <link rel="stylesheet" type="text/css" href="/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="/css/roles-icon.css">
        <script src="/js/app.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112771073-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-112771073-1');
        </script>
        {{-- Shink testing --}}

        <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

    </head>
    <body class="body-inner">
        <div class="uk-container">
                @include('layout.nav')
        </div>
        <div class="content-margin uk-container uk-text-center uk-margin-xlarge-top uk-margin-xlarge-bottom">
               <h2>@yield('message')</h2>
               <a href="{{url('/')}}"><span class="uk-button uk-button-primary uk-margin-small-top">Back to main page</span></a>
        </div>
    </body>
    <footer>
        <div class="footer-bottom"> {{-- START Footer Bottom --}}
    <div class="uk-container">
        <div class="uk-width-1-1 uk-text-center ">
            <h1 style="line-height: 0.1rem;" class="call-text inverse-text mobile-title">Stay connected </h1>
            <a class="footer-icon " href="https://www.facebook.com/overwatchseasons" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a class="footer-icon" href="https://www.twitch.tv/overwatchseasons" target="_blank"><i class="fab fa-twitch"></i></a>
            <a class="footer-icon" href="https://vk.com/overwatch_seasons" target="_blank"><i class="fab fa-vk"></i></a>
            <a class="footer-icon" href="#" target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="footer-icon" href="mailto:info@overwatch-seasons.com" target="_top"><i class="fas fa-envelope"></i></a>
            <div class="uk-margin-medium-top">
            <p class="footer-text">©2018 Overwatch Seasons International Cup.</br> All trademarks referenced herein are the properties of their respective owners.</p>

                <img style="height:auto; width:100px;" src="/svg/playstation.svg"> <img style="height:auto; width:70px;" src="/svg/blizzard2.svg">
            </div>
        </div>
    </div>
</div> {{-- END Footer Bottom --}}
    </footer>
</html>
