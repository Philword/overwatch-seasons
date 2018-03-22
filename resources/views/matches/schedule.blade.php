@extends('layout.master')
@section('seo')
    <title>The Overwatch Seasons - Schedule</title>
    <meta name="description" content="Season one. Full matches schedule.">
@stop
@section('content')
    <div class="uk-container uk-margin-medium-top">
        <div class="uk-grid" uk-grid>
            <div class="uk-width-1-2">
                <h1>MATCH SCHEDULE</h1>
            </div>
            <div class="uk-width-1-2">
                <div class="uk-margin uk-float-right">
                    <!-- Tab links -->
                    <div class="uk-flex-right tab" >
                      <button class="tablinks" onclick="openCity(event, 'Group stage')" id="defaultOpen">Group stage</button>
                      <button class="tablinks" {{-- onclick="openCity(event, 'Playoff') --}}">Final stage</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-margin-medium-top">
            <!-- Tab content -->
            <div id="Group stage" class="tabcontent uk-animation-fade">
              @include('matches.group')
            </div>

            <div id="Playoff" class="tabcontent uk-animation-fade">
              @include('matches.final')
            </div>
        </div>
    </div>
    <script src="/js/tabs.js"></script>
@stop
