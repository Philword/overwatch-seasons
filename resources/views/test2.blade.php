<div>
    @foreach($groups as $group)
      @if($group->stage_name == 'FINAL')
        <ul>
            <h2>{{ $group->name }}</h2> <strong>{{ date('l', strtotime($group->date)) }}</strong> {{ date('F jS ', strtotime($group->date)) }}
            <h3>Matches</h3>
            @foreach($group->matches as $match)

               <ul>
                   {{ $match->leftTeam->name}} - vs - {{ $match->rightTeam->name }}
               </ul>
               <div>
               </div>
            @endforeach
        </ul>
        @else

        @endif
    @endforeach
</div>
