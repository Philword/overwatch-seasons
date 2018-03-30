@extends('layout.master')
@section('seo')
 <title>The Overwatch Seasons - Live match</title>
     <meta name="description" content="Live match">
     <meta property="og:image" content="/img/seo_image.jpg"/>
     <meta property="og:url" content="https://overwatch-seasons.com/live" />
@endsection
@section('content')
    <div class="uk-container uk-margin-medium-top">
        <div class="uk-flex mobile-grid">
            <div class="uk-width-2-3@s">
                <div id="twitch-embed"></div>
                <script src="https://embed.twitch.tv/embed/v1.js"></script>
                <script type="text/javascript">
                  new Twitch.Embed("twitch-embed", {
                    width: '100%',
                    height: 380,
                    layout: 'video',
                    channel: "overwatchseasons"
                  });
                </script>
            </div>
            <div style="border-right: 2px solid #ff9b00;" class="uk-width-1-3@s uk-padding-small uk-background-muted">
                <div>
                    <div class="uk-flex uk-margin-small-top">
                        @foreach( $matches as $match)
                            <div class="uk-width-2-5@s">
                                    <div class="uk-flex uk-flex-center"><img style="width: 70%; height: 70%" src="{{ Voyager::image($match->leftTeam->logo) }}"> </div>
                                    <div class="uk-flex uk-flex-center uk-text-center live-text">{{ $match->leftTeam->name}}</div>
                            </div>
                            <div class="uk-width-1-5@s live-text uk-flex uk-flex-center uk-flex-middle live-score">{{ $match->score_left}} - {{ $match->score_right }}</div>
                            <div class="uk-width-2-5@s">
                                <div class="uk-flex uk-flex-center"><img style="width: 70%; height: 70%" src="{{ Voyager::image($match->rightTeam->logo) }}"> </div>
                                    <div class="uk-flex uk-flex-center live-text">{{ $match->rightTeam->name}}</div>
                            </div>
                    </div>
                    <div class="uk-margin-medium-top">
                        @foreach( $match->maps as $map)
                            <div class="uk-flex uk-flex-center uk-text-center uk-margin-small-top">
                                <div class="uk-width-1-5 live-text uk-flex uk-flex-middle uk-flex-center">{{ $map->score_left}}</div>
                                <div style="background-image: url('{{ $map->mapId->photo}}')" class="uk-width-3-5 live-map-info">{{ $map->mapId->name}}</div>
                                <div class="uk-width-1-5 live-text uk-flex uk-flex-middle uk-flex-center">{{ $map->score_right }}</div>
                            </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="uk-background-primary uk-flex">
            <div class="uk-margin-left ">
                <div style="padding-top:5px" class="call-text inverse-text mobile-title">Donate to collect prize pool!</div>
                <div style="padding-bottom:5px" class="inverse-text">All donated money will be shared between winners.</div>
            </div>
            <div style="text-align: center;" class="uk-flex uk-flex-middle uk-margin-left uk-margin-right">
                <a class="live-donate-button" href="https://streamlabs.com/overwatchseasons" target="_blank"><img style="width: 23px; height: 23px; margin-right: 5px;" src="/svg/coins-primary.svg">Make a Donation</a>
            </div>
        </div>
       <div class="uk-margin-medium-top">
            <div id="twitch-embed"></div>
            <iframe frameborder="0"
                    scrolling="no"
                    id="overwatchseasons"
                    src="http://www.twitch.tv/embed/overwatchseasons/chat"
                    height="350"
                    width="100%">
            </iframe>
       </div>
    </div>
@endsection
