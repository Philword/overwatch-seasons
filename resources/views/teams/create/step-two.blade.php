@extends('layout.master')
@section('seo')
        <!-- Open Graph -->
        <meta property="og:url"                content="http://test3.lol/application" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="The Overwatch Seasons - Application From" />
        <meta property="og:description"        content="Team application form" />
        <meta property="og:image"              content="/img/seo_image.jpg" />
        <!-- Close Graph-->
@endsection
@section('content')
     <div class="uk-container uk-margin-medium-top" >
        <h1>Team application</h1>
        <div class="uk-card zero-magrin uk-card-default uk-card-body uk-width-1-1@s uk-margin-medium-top" uk-grid>
            <div class="uk-width-1-4@s sidebar-border"> {{-- Sidebar START --}}
               @include('teams.create.sidebar.step-two')
            </div>{{-- Sidebar END --}}
            <div class="uk-width-3-4@s"> {{-- From START --}}
                @include('teams.create.form.step-two')
            </div> {{-- Form END --}}
    </div> {{-- end of container --}}
</div>
@stop
