@extends('layout.promomaster')
@section('seo')
        <!-- Open Graph -->
        <meta property="og:url"                content="http://test3.lol/" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="The Overwatch Seasons" />
        <meta property="og:description"        content="The time has come! Assemble your team on PS4 ™ to fight and win in the Overwatch Seasons International cup!" />
        <meta property="og:image"              content="/img/seo_image.jpg" />
        <!-- Close Graph-->
@endsection
@section('content')
    <div class="uk-container tracer-bg">
        <div class="uk-flex uk-grid uk-margin-xlarge-top uk-margin-large-bottom"> {{-- Call to action block --}}
            <div class="uk-width-2-3@s uk-text-center uk-margin-large-top ">
                <div class="call-text mobile-title">The time has come! Assemble your team on PS4 ™ to fight and win in the </div>
                <div class="call-text mobile-title">Overwatch Seasons International cup!</div>
                <div class="uk-margin-large-top uk-animation-toggle ">
{{--
                    <span class="timer-text">Registration Starts In</span>
                    <p class="timer" id="demo"></p> --}}

                        <a class="uk-button uk-button-primary uk-animation-shake" href="{{route('application')}}">Register Your Team</a>
                         <P>*registration will be closed on 20th March</P>
                </div>
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
<script type="text/javascript" src="/js/timer.js"></script>
@stop
