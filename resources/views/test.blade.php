<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/flag-icon.css">
        <link rel="stylesheet" type="text/css" href="css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="css/roles-icon.css">
    </head>
    <body>
{{-- SHOW ALL PLAYERS --}}
        <h1>Players</h1>
            <div>
                <div>
                       @foreach(App\Player::all() as $player)
                        <ul>
                            <div><strong>Nick:</strong><a href="https://playoverwatch.com/ru-ru/career/psn/{{ $player->psn }}" target="_blank">{{ $player->nick }}</a></div>
                            <div><strong>First Name:</strong> {{ $player->firstname }}</div>
                            <div><strong>Last Name:</strong> {{ $player->lastname }}</div>
                            <div><strong>Role:</strong> <span class="player-role {{ $player->role->icon }}"></span></div>
                            <div><strong>Team:</strong> {{ $player->team->name }}</div>
                            <div><strong>From:</strong> <span class="flag-icon {{ $player->team->country->flag }}"></span></div>
                            <div>Team Logo: <img style=" width: 60px; height: auto;" src="{{ $player->team->logo }}"></div>
                    </ul>
                    <hr>
                @endforeach
                </div>
                <div>
                    <h1>Teams</h1>
                    @foreach( $teams as $team)
                        <ul><span class="flag-icon {{ $team->country->flag}}"></span> {{ $team->name}}
                            @foreach($team->players as $player)
                                <ul>
                                    Player: {{ $player->nick }}  <span class="player-role {{ $player->role->icon}}"></span>
                                </ul>
                            @endforeach
                        </ul>
                    @endforeach

                </div>
                <div>
                    <!-- Add a placeholder for the Twitch embed -->
                    <div id="twitch-embed"></div>

                    <!-- Load the Twitch embed script -->
                    <script src="https://embed.twitch.tv/embed/v1.js"></script>

                    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
                    <script type="text/javascript">
                      new Twitch.Embed("twitch-embed", {
                        width: 854,
                        height: 480,
                        layout: "video",
                        theme: "dark",
                        channel: "overwatchseasons"
                      });
                    </script>
                </div>
                <div>
                    <iframe frameborder="400"
                            scrolling="yes"
                            id="overwatchseasons"
                            src="http://www.twitch.tv/embed/overwatchseasons/chat"
                            height="400"
                            width="100%">
                    </iframe>
                </div>
            </div>




    </body>
    </html>

