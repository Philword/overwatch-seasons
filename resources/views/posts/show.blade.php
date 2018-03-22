@extends('layout.master')
@section('seo')
    <title>The Overwatch Seasons - {{ $post->title }}</title>
    <meta name="description" content="{{ $post->excerpt }}">
@endsection
@section('content')
<div class="uk-container uk-margin-medium-top" >
        <div class="uk-grid" uk-grid>
            <div class="uk-width-2-3@s">
                <h1>{{ $post->title }}</h1>
            </div>
            <div class="uk-width-1-3@s uk-width-1-1 uk-flex uk-flex-left">
                <div class="uk-margin uk-float-right uk-flex uk-text-left">
                    <div class="category-name">{{ $post->category->name}}</div>
                    <div class="post-date">
                    <i class="far fa-clock"></i><span> {{ $post->created_at->diffForHumans() }}</span>
                    <span> | By {!! $post->authorId->name !!}</span>
                    </div>

                </div>
            </div>
        </div>
    <div class="uk-container uk-margin-medium-top uk-animation-fade">
        <div class=" uk-background-muted uk-padding">
            <div class="uk-flex uk-flex-center uk-margin-small-top">
                <img style="width: 100%; height: 100%;" src="{{ Voyager::image($post->image) }}">
            </div>
            <div class="uk-margin-small-top"><p>{!! $post->body !!}</p></div>
        </div>
        <div class="uk-margin-medium-top uk-background-muted uk-padding"> {{-- FB comments --}}
             <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=361072064409381&autoLogAppEvents=1';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-comments" data-href="http://test3.lol/news/{{ $post->id }}" data-numposts="7" data-width="100%" data-order-by="time"></div>
        </div> {{-- END FB comments --}}
    </div>
</div>
@endsection

