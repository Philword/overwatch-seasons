@extends('layout.master')
@section('seo')
    <title>The Overwatch Seasons - News</title>
    <meta name="description" content="Overwatch Seasons latest news">
@endsection
@section('content')
    <div class="uk-container uk-margin-medium-top">
        <h1>Latest News</h1>
        <div class="uk-margin-medium-top uk-background-muted uk-padding uk-animation-fade">
            @foreach( $posts as $post)
                <div class="uk-flex uk-margin-small-bottom mobile-grid">
                    <div class="uk-width-1-3@s ">
                        <img src="{{ Voyager::image($post->image) }}">
                    </div>
                    <div class="uk-width-2-3@s uk-padding-small" style="position: relative;">
                        <a href="/news/{{ $post->id }}"><h2>{{ $post->title}}</h2></a>
                        <div class="uk-margin-small-top uk-margin-medium-bottom">
                            {{ $post->excerpt }}
                        </div>
                        <div class="uk-position-absolute uk-flex" style="bottom: 0">
                            <div class="category-name">{{ $post->category->name}}</div>
                            <div class="post-date">
                                <i class="far fa-clock"></i><span> {{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
            <span class="uk-pagination uk-flex-center uk-margin-medium-top">{{ $posts->links() }}</span>
        </div>
    </div>
@endsection
