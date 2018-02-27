<div>
    @foreach($groups as $group)
        <ul>
            <h2>{{ $group->name }}</h2>
           {{--  <h3>Teams:</h3>
            @foreach($group->matches as $match)
               <ul>
                   {{ $match->leftTeam->name}} </br> {{ $match->rightTeam->name }}
               </ul>

               <div>
               </div>
            @endforeach --}}
            <h3>Matches</h3>
            @foreach($group->matches as $match)
               <ul>
                   {{ $match->leftTeam->name}} - vs - {{ $match->rightTeam->name }}
               </ul>

               <div>
               </div>
            @endforeach
        </ul>
    @endforeach
</div>
