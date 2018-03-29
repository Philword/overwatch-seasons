@extends('layout.master')
@section('seo')
     <title>The Overwatch Seasons - Standings</title>
     <meta name="description" content="Match Standings">
     <meta property="og:image" content="/img/seo_image.jpg"/>
     <meta property="og:url" content="https://overwatch-seasons.com/standings" />
@endsection
@section('content')
    <div class="uk-container uk-margin-medium-top">
        <div class="uk-grid" uk-grid>
            <div class="uk-width-1-2">
                <h1>STANDINGS</h1>
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
    </div>
    <div class=" uk-container uk-margin-medium-top">
         <div id="Group stage" class="tabcontent uk-animation-fade">
            <span>Round Robin. 4 participants compete in each group. 2 participants advance from each group </span>
            <div class=" uk-margin-medium-top">
                @foreach ($pages as $page)
                    @if( $page->title == 'Standings')
                        {!! $page->body !!}
                    @endif
                @endforeach
            </div>
         </div>
    </div>
    <script src="/js/tabs.js"></script>
@endsection
