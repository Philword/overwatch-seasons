@extends('layout.master')
@section('seo')
<title>The Overwatch Seasons - {{ $match->leftTeam->name }} -vs- {{ $match->rightTeam->name }}</title>
<meta name="description" content="Overwatch Seasons match: {{ $match->leftTeam->name }} -vs- {{ $match->rightTeam->name }}">
<!-- Open Graph -->
<meta property="og:url"                content="http://overwatch-seasons.com/match/{match}" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="{{ $match->leftTeam->name }} -vs- {{ $match->rightTeam->name }}" />
<meta property="og:description"        content="Overwatch Seasons" />
<meta property="og:image"              content="/img/seo_image.jpg" />
@endsection
@section('content')
    <div class="uk-container uk-margin-medium-top uk-animation-fade">
         <div class="group-name single-match-group">{{$match->group->name}}&nbsp | &nbsp <span class="match-date">{{ date('l F jS ', strtotime($match->date)) }}</span>
         </div>
        <div class="single-match-details">
            <div class="uk-flex"> {{-- Match info --}}
                <div class="uk-width-2-6@s"> {{-- Left team --}}
                    <div class="uk-flex uk-flex-middle uk-flex-left">
                        <img class="match-team-logo" src="{{ Voyager::image($match->leftTeam->logo)}}">
                        <div style="display:grid">
                            <a href="/teams/{{ $match->leftTeam->name }}"> <span class="match-details-team-name">{{ $match->leftTeam->name }}</span></a>
                            <span class="none-display"><span class="flag-icon flag-small {{ $match->leftTeam->country->flag}}"></span> {{ $match->leftTeam->country->name}}</span>
                        </div>
                    </div>
                </div> {{-- END left team --}}
                <div class="uk-width-1-6@m"> {{-- Match details --}}
                    <div class="match-details-center">
                        <div class="match-details-score">
                             @if ( $match->status == 'LIVE')
                              <span class="single-match-score">{{ $match->score_left }}</span>&nbsp; - &nbsp;<span class="single-match-score">{{ $match->score_right }}</span>
                              @elseif( $match->status == 'COMPLETED')
                                @if($match->score_left > $match->score_right)
                                <span class="match-status-winner single-match-score">{{ $match->score_left }}</span>&nbsp; - &nbsp;<span class="single-match-score">{{ $match->score_right }}</span>
                                @else
                                 <span class="single-match-score">{{ $match->score_left }}</span>&nbsp; - &nbsp;<span class="match-status-winner single-match-score">{{ $match->score_right }}</span>
                                @endif
                              @else
                              <span class="match-date">
                                {{ date('g:i A', strtotime($match->date)) }}</span>
                             @endif
                        </div>
                    </div>
                </div> {{-- END Match details --}}
                <div class="uk-width-2-6@s"> {{-- Right team --}}
                    <div class="uk-flex uk-flex-middle uk-flex-right">
                         <div style="display: grid" class="uk-grid uk-flex-right">
                             <a href="/teams/{{ $match->rightTeam->name }}"><span class="match-details-team-name">{{ $match->rightTeam->name }}</span></a>
                             <span class="none-display uk-text-right"><span class="flag-icon flag-small {{ $match->rightTeam->country->flag}}"></span> {{ $match->rightTeam->country->name}} </span>
                         </div>
                         <img class="match-team-logo" src="{{ Voyager::image($match->rightTeam->logo)}}">
                    </div>
                </div> {{-- END Right Team --}}
            </div> {{-- END Match info --}}
        </div>
        <div class="uk-margin-medium-top">
            @foreach($match->maps as $map)
            <div class="uk-margin-small-top uk-flex uk-flex-center"> {{-- Maps info --}}
                <div class="uk-width-1-3 uk-flex uk-flex-middle uk-background-muted">
                    <div style="height:80px;" class="uk-width-1-5 map-info-team-logo uk-flex uk-flex-middle none-display">
                        <img style="max-height:80px; width:auto" src="{{ Voyager::image($match->leftTeam->logo)}}">
                    </div>
                    <div class="uk-width-3-5 map-info-team-name none-display">{{ $match->leftTeam->name }}</div>
                    <div class="uk-width-1-5@s map-info-team-score uk-flex uk-flex-center">{{ $map->score_left }}</div>
                </div>
                <div class="uk-width-1-5@s uk-flex uk-flex-middle uk-flex-center"" style="background-image: url('{{ $map->mapId->photo}}')">
                    <div class="maps-info-map-name">{{$map->mapId->name}}</div>
                </div>
                <div class="uk-width-1-3 uk-flex uk-flex-middle uk-background-muted uk-flex-row-reverse">
                    <div class="uk-width-1-5@s map-info-team-logo uk-flex uk-flex-middle none-display">
                        <img style="max-height:80px; width:auto" src="{{ Voyager::image($match->rightTeam->logo)}}">
                    </div>
                    <div class="uk-width-3-5 map-info-team-name uk-flex uk-flex-right none-display">{{ $match->rightTeam->name }}</div>
                    <div class="uk-width-1-5@s map-info-team-score uk-flex uk-flex-center">{{ $map->score_right }}
                    </div>
                </div>
            </div> {{-- END Maps info --}}
            @endforeach
        </div>
    </div>
@endsection
