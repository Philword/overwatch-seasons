<div>
  @foreach($matches as $match)
  <h1>Match</h1> <strong>{{ date('l', strtotime($match->date)) }}</strong> {{ date('F jS ', strtotime($match->date)) }}
    <ul>
      <li><strong>Time:</strong>
        @if ( $match->status == 'LIVE')
          Live Now
          @elseif( $match->status == 'COMPLETED')
            {{ $match->score_left }} - {{ $match->score_right }}
          @else
            {{ date('g:ia', strtotime($match->date)) }}
         @endif
      </li>
      <li><strong>Stage:</strong> {{ $match->stage->name }}</li>
      <li><strong>Group:</strong> {{ $match->group->name }}</li>
      <li>{{ $match->score_left }} <strong>{{ $match->leftTeam->name }}</strong> -vs- <strong>{{ $match->rightTeam->name }}</strong> {{ $match->score_right }}</li>
      <li><strong>Winner:</strong> {{ $match->winner }}</li>
      <li><strong>Status:</strong> {{ $match->status }}</li>
    </ul>
      <h3>Maps:</h3>
      @foreach($match->maps as $map)
      <ul>
        <li>{{ $match->leftTeam->name }} {{ $map->score_left}} - <strong>{{ $map->mapId->name}}</strong>- {{ $map->score_right}} {{ $match->rightTeam->name }}</li>
      </ul>
    @endforeach
    @endforeach
</div>sdsd

