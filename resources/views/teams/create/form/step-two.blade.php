<h2>Add Players</h2>
         <div class="uk-margin-medium-top uk-animation-fade">
    <form method="POST" action="players" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="uk-margin">
         <div class="form-legend">Player Nick</div>
          <input class="uk-input" type="text" value="{{ old('nick') }}" name="nick" placeholder="Player nick">
        </div>
        <div class="uk-margin">
         <div class="form-legend">Frist name</div>
          <input class="uk-input" type="text" value="{{ old('firstname') }}" name="firstname" placeholder="First Name">
        </div>
        <div class="uk-margin">
         <div class="form-legend">Last name</div>
          <input class="uk-input" type="text" value="{{ old('lastname') }}" name="lastname" placeholder="Last Name">
        </div>
        <div class="uk-margin">
          <div class="form-legend">Role</div>
              <select class="uk-select " name="player_role_id" placeholder="Enter your team name">
                 <option>Choose player role</option>
                 @foreach(App\PlayerRole::all()->sortBy('name') as $role)
                 <option value="{{ $role->id}}" {{ old('player_role_id') == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                 @endforeach
                </select>
           </div>
           <div class="uk-margin">
         <div class="form-legend">PSN</div>
          <input class="uk-input" type="text" value="{{ old('psn') }}" name="psn" placeholder="Player PSN">
        </div>
          @if( count($errors) )
                        <ul class="uk-alert uk-alert-danger">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
        <div class="uk-margin uk-margin-medium-top">
            <button type="submit" class="uk-button uk-button-primary uk-float-right">Next</button>
        </div>
    </form>
</div>
