<p>All times are in your local time</p>
@foreach($groups as $group)
<div class="uk-margin-medium-bottom">
    @if($group->stage_name == 'GROUP')
        <span class="group-name">{{$group->name}}</span>
        <div class="match-row-header">
            <span class="match-date"><span class="wight-500">{{ date('l', strtotime($group->date)) }}</span>
            {{ date('F jS ', strtotime($group->date)) }}</span>
        </div>
        @foreach($group->matches->sortBy('date') as $match)
        <a href="#" class="match-row uk-text-center">
           <div class="uk-width-1-3 uk-flex team-label-reverse">
                <img style=" width: 40px; height: 100%;" src="{{Voyager::image($match->leftTeam->logo)}}">
                <div class="team-label-name uk-margin-small-right">{{$match->leftTeam->name}}</div>
           </div>
            <div class="match-row-status">
                <span class="match-status">
                     @if ( $match->status == 'LIVE')
                      Live Now
                      @elseif( $match->status == 'COMPLETED')
                        @if($match->score_left > $match->score_right)
                        <span class="match-status-winner ">{{ $match->score_left }}</span>&nbsp; - &nbsp;<span>{{ $match->score_right }}</span>
                        @else
                         <span>{{ $match->score_left }}</span>&nbsp; - &nbsp;<span class="match-status-winner">{{ $match->score_right }}</span>
                        @endif
                      @else
                        {{ date('g:i A', strtotime($match->date)) }}
                     @endif
                </span>
            </div>
             <div class="uk-width-1-3 uk-flex team-label">
                <img class="uk-margin-small-right" style=" width: 40px; height: 100%;" src="{{Voyager::image($match->rightTeam->logo)}}">
                <div class="team-label-name uk-margin-small-right">{{ $match->rightTeam->name }}</div>
                <div class="match-row-details uk-width-1-1 uk-position-right">
                    <button style="visibility:hidden;" type="button" class="uk-button uk-button-primary uk-position-right">Details</button>
                </div>
           </div>
        </a>
        @endforeach
        @endif
    </div>
    @endforeach
</div>
