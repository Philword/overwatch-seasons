
    <nav class="uk-navbar-container uk-margin uk-margin-medium-top uk-margin-large-bottom  " uk-navbar >
        <div class="uk-navbar-left uk-background-secondary uk-width-1-1" >
            <div>
                <a class="uk-navbar-item uk-logo" href="{{url('/')}}">
                    <img src="/svg/logo.svg" style="height:auto; width:166px;" alt="Overwatch Seasons">
                </a>
            </div>
            <ul class="uk-navbar-nav">
                <li ><a a class="muted-nav" href="#">Teams</a></li>
                <li class="uk-parent">
                <a href="#">Players</a></li>
                <li ><a a class="muted-nav" href="#">Schedule</a></li>
                <li ><a a class="muted-nav" href="#">Standings</a></li>
                <li ><a a class="muted-nav" href="#">Videos</a></li>
                <li ><a a class="muted-nav" href="#">News</a></li>
                <li ><a  href="{{ url('/rules') }}">Rules</a></li>
            </ul>

             <div class="uk-navbar-right">
              {{--   <a href="{{ url('/application') }}"><button class="stream-buttion uk-margin-medium-right">Apply your team</button></a> --}}

            </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function(){
                // this will get the full URL at the address bar
                var url = window.location.href;

                // passes on every "a" tag
                $(".uk-navbar-nav > li > a").each(function() {
                        // checks if its the same on the address bar
                    if(url == (this.href)) {
                        $(this).closest("li").addClass("uk-active");
                    }
                });
            });
        </script>
    </nav>




