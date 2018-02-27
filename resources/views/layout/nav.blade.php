
    <nav class="uk-navbar-container uk-margin uk-margin-medium-top uk-margin-large-bottom  " uk-navbar >
        <div class="uk-navbar-left uk-background-secondary uk-width-1-1" >
            <div>
                <a class="uk-navbar-item uk-logo" href="{{url('/')}}">
                    <img src="/svg/logo.svg" style="height:auto; width:166px;" alt="Overwatch Seasons">
                </a>
            </div>
            <ul class="uk-navbar-nav">
                <li><a href="{{ url('/teams')}}">Teams</a></li>
                <li>
                    <a href="{{ url('/players') }}">Players</a></li>
                <li><a href="#">Schedule</a></li>
                <li><a href="#">Standings</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">News</a></li>
                <li><a href="{{ url('/rules') }}">Rules</a></li>
            </ul>

             <div class="uk-navbar-right">
              {{--   <a href="{{ url('/application') }}"><button class="stream-buttion uk-margin-medium-right">Apply your team</button></a> --}}

            </div>
            </div>
        </div>
    </nav>




