@extends('layout.master')
@section('seo')
        <!-- Open Graph -->
        <meta property="og:url"                content="http://test3.lol/teams" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="The Overwatch Seasons - Teams" />
        <meta property="og:description"        content="Participating teams" />
        <meta property="og:image"              content="/img/seo_image.jpg" />
        <!-- Close Graph-->
@endsection
@section('content')
    <div class="uk-container uk-margin-medium-top " >
        <div class="uk-grid" uk-grid>
            <div class="uk-width-1-2">
                <h1>The Teams</h1>
            </div>
            <div class="uk-width-1-2">
                <div class="uk-margin uk-float-right">
                </div>
            </div>
        </div>
        <div class="zero-magrin uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" uk-grid>
            @foreach( $teams as $team)
                <div style="padding: 2px;" class="uk-animation-fade">
                    <div class="uk-card  uk-card-default uk-card-body">
                        <div class="team-logo"><img src="/{{ $team->logo }}"></div>
                    <h3>{{ $team->name }}</h3>
                        <span class="flag-icon flag-small {{ $team->country->flag }}"></span> <span>{{ $team->country->name }}</span>
                        <hr>
                        <a class="roster-button" href="/teams/{{ $team->name }}"> view roster</a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
@endsection
