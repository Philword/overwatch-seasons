@extends('layout.master')
@section('seo')
    <title>The Overwatch Seasons - Videos</title>
    <meta name="description" content=" Overwatch Seasons Videos">
@endsection
@section('content')
    <div class="uk-container uk-margin-medium-top">
        <div class="zero-magrin uk-width-1-1 uk-animation-fade" uk-grid>
            @foreach($videos as $video)
                <a href="#" style="padding: 2px" class="uk-width-1-3@s">
                    <div class="uk-background-muted uk-padding-small">
                        <div>
                            {{-- Image Holder --}}
                        </div>
                        <div class="uk-flex uk-flex-center">
                            <span class="video-name">
                                {{ $video->leftTeam->name }} -vs- {{ $video->rightTeam->name}}
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
