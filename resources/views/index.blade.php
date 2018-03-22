@extends('layout.promomaster')
@section('seo')
        <title>The Overwatch Seasons</title>
        <meta name="description" content="The time has come! Assemble your team on PS4 ™ to fight and win in the Overwatch Seasons International cup!">
        <!-- Open Graph -->
        <meta property="og:url"                content="https://overwatch-seasons.com/" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="The Overwatch Seasons" />
        <meta property="og:description"        content="The time has come! Assemble your team on PS4 ™ to fight and win in the Overwatch Seasons International cup!" />
        <meta property="og:image"              content="/img/seo_image.jpg" />
        <!-- Close Graph-->
@endsection
@section('content')
    <div class="uk-container">
        <div class="uk-margin-medium-top uk-flex"> {{-- Call to action block --}}
            <div class="uk-width-3-5@s uk-text-center uk-flex uk-flex-middle uk-margin-medium-top">
                <div>
                    <div class="call-text mobile-title">​​​16 Strongest Teams Of Masters And Grandmasters on PS4 Will Compete For The Ultimate Goal Of Being The Overwatch Season​s​ Best Team!​</div>
                <div class="uk-margin-large-top uk-animation-toggle ">

                         {{-- Registration + view teams --}}
                         <a class="uk-button uk-button-primary uk-animation-shake"
                          href="{{route('teams')}}">View Teams</a>
                          <p>*Full matches schedule will be avialiable soon. </p>
                </div>
                </div>
            </div>
            <div class="uk-width-2-5@s none-display uk-padding-small">
                <img src="/img/tracer.png">
            </div>
        </div> {{-- END Call to action block --}}
    </div>
</div>
    </div> {{-- END requiree=ment block --}}
    <div class="row-bg">
        <div class="uk-container map-bg"> {{-- Start world block --}}
            <div class="uk-flex uk-grid big-padding"> {{-- Call to action block --}}
                <div class="uk-width-1-3@s">
                </div>
                <div class="uk-width-2-3@s   uk-text-center uk-margin-large-top">
                     <div class="call-text mobile-title">Any Country Allowed to play in</div>
                    <div class="call-text mobile-title">Overwatch Seasons</div>
                    <p>Overwatch Seasons supports PS4 community and one of our goals is to let any team in the world who meets the minimum requirements to participate in tournament.</p>
                </div>
            </div>
        </div> {{-- END Call to action block --}}
        </div> {{-- END World Block --}}
        <div class="row-light">
             <div class="uk-container cup-bg hide-bg">
                  <div class="uk-flex uk-grid big-padding"> {{-- Call to action block --}}
                    <div class="uk-width-2-3@s  uk-text-center ">
                        <div class="call-text mobile-title">Prize info Cooming soon</div>
                        <p>Overwatch Seasons is organized on the enthusiasm of the PS4 Overwatch fans. Our main goal is to do the tournament for the common fun and enjoy, but along with it we are making great efforts to find sponsors to ensure the most interesting prizes for the winners of the tournament.</p>
                        <p>The final prizes will be anounced soon. Stay tuned!</p>
                    </div>
        </div> {{-- END Call to action block --}}
             </div>
        </div>
    </div>
@stop
