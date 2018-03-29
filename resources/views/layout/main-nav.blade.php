
        <div class="uk-navbar uk-width-1-1 uk-margin-large-top uk-animation-fade" >
            <div class="uk-navbar-center">
                {{-- Production menu --}}
            <ul class="uk-navbar-nav">
                <li ><a href="{{ route('teams') }}">Teams</a></li>
                <li><a href="{{ url('/players') }}">Players</a></li>
                <li><a href="{{ route('schedule') }}">Schedule</a></li>
                <li><a href="{{ route('standings') }}">Standings</a></li>
                <li><a class="muted-nav" href="#">Videos</a></li>
                <li><a href="{{ url('/news')}}">News</a></li>
                <li><a  href="{{ url('/rules') }}">Rules</a></li>
            </ul>
                {{-- Developer menu --}}
               {{--  <ul class="uk-navbar-nav">
                <li><a href="{{ url('/teams') }}">Teams</a></li>
                <li><a href="{{ url('/players') }}">Players</a></li>
                <li><a href="{{ url('/schedule') }}">Schedule</a></li>
                <li><a class="muted-nav" href="#">Standings</a></li>
                <li><a href="{{ route('videos') }}">Videos</a></li>
                <li><a href="{{ url('/news') }}">News</a></li>
                <li><a  href="{{ url('/rules')}}">Rules</a></li>
            </ul> --}}
            </div>
        </div>

