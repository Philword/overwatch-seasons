@extends('layout.master')
@section('seo')
        <!-- Open Graph -->
        <meta property="og:url"                content="http://test3.lol/teams/{{ $team->name }}" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="The Overwatch Seasons - Teams" />
        <meta property="og:description"        content="Participant: {{ $team->name }}" />
        <meta property="og:image"              content="/img/seo_image.jpg" />
        <!-- Close Graph-->
@endsection
@section('content')
    <div class="uk-container uk-margin-medium-top" >
       <div class="uk-grid uk-card-default zero-magrin uk-child-width-1-1 team-padding">
        @if($team->status == 'PUBLISHED')
            <div class="uk-card  uk-card-default uk-card-body uk-width-1-4@s uk-text-center">
                <div class="team-page-logo"><img src="/{{ $team->logo }}"></div>
                <h2>{{ $team->name }}</h2>
                <span> <span class="flag-icon flag-small {{ $team->country->flag }}"></span> {{ $team->country->name }}</span>
            </div>
            <div class="uk-card uk-card-body  uk-width-3-4@s">
                <div class="zero-magrin uk-child-width-1-2@s  uk-margin-large-top" uk-grid>
                @foreach( $team->players as $player)
                    <div class="uk-width-1-2@s uk-animation-fade">
                        <div class="uk-flex">
                            <div class="role-big {{ $player->role->icon }}"></div>
                        <div style="display: inline-block;">
                            <a  href="https://playoverwatch.com/career/psn/{{ $player->psn }}" target="_blank">
                                <div class="player-name"> {{ $player->nick }}</div>
                            </a>
                            <span class="player-full-name">{{ $player->firstname }} {{ $player->lastname }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
     @else
       <span class="k-card  uk-card-default uk-card-body uk-width-1-1 uk-text-center uk-margin-xlarge-top uk-margin-xlarge-bottom">This team is still in pending status</span>
    @endif
@endsection
