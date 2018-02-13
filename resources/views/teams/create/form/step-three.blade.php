<h2>Application Review</h2>
  <div class="uk-grid zero-magrin uk-width-1-1@s zero-margin uk-margin-large-top uk-animation-fade">
    <div class="uk-width-1-3@s uk-text-center">
      <img src="/{{ $team->logo }}">
      <h2>{{$team->name}}</h2>
      <span> <span class="flag-icon flag-small {{ $team->country->flag }}"></span> {{ $team->country->name }}</span>
    </div>
    <div class="uk-width-2-3@s">
       <div class="zero-magrin uk-child-width-1-2@s uk-margin-medium-top" uk-grid>
                @foreach( $team->players as $player)
                    <div class="uk-width-1-2@s uk-animation-fade">
                        <div class="uk-flex">
                            <div class="role-big {{ $player->role->icon }}"></div>
                        <div style="display: inline-block;">
                            <a  href="https://playoverwatch.com/career/psn/{{ $player->psn }}" target="_blank">
                                <div class="player-name"> {{ $player->nick }}</div>
                            </a>
                            <span class="player-full-name">{{ $player->firstname }} {{ $player->lastname }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
 <div class="uk-grid uk-margin uk-margin-medium-top uk-float-right uk-width-1-1@s">
            <a href="/application/submited" class="uk-button apply-buttons uk-button-primary uk-float-right uk-margin-small-left">Submit Application</a>
            <a href="/application/{{$team->name}}/players" class="uk-button uk-button-primary apply-buttons uk-float-right">Add More Players</a>
          </div>
        </div>
  </div>
</div>
