@extends('layout.master')
@section('page-title')
    <title>The Overwatch Seasons - Apply</title>
@stop
@section('content')
     <div class="uk-container uk-margin-medium-top" >
        <h1>Team application</h1>
        <div class="uk-card zero-magrin uk-card-default uk-card-body uk-width-1-1@s uk-margin-medium-top" uk-grid>
            <div class="uk-width-1-4@s sidebar-border"> {{-- Sidebar START --}}
               @include('teams.create.sidebar.final')
            </div>{{-- Sidebar END --}}
            <div class="uk-width-3-4@s"> {{-- From START --}}
                @include('teams.create.form.final')
            </div> {{-- Form END --}}
    </div> {{-- end of container --}}
</div>
@stop
