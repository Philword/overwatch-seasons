@extends('layout.master')
@section('seo')
        <title>The Overwatch Seasons - Players</title>
        <meta name="description" content="Overwatch Seasons official players list.">
        <!-- Open Graph -->
        <meta property="og:url"                content="http://test3.lol/players" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="The Overwatch Seasons - Players" />
        <meta property="og:description"        content="Participating players" />
        <meta property="og:image"              content="/img/seo_image.jpg" />
        <!-- Close Graph-->
@endsection
@section('content')
    <div class="uk-container uk-margin-medium-top" >
        <div class="uk-grid" uk-grid>
            <div class="uk-width-1-2">
                <h1>Players</h1>
            </div>
            <div class="uk-width-1-2">
                <div class="uk-margin uk-float-right">
                    <form class="uk-search uk-search-default">
                        <span uk-search-icon></span>
                        <input class="uk-search-input" type="search" placeholder="Search...">
                    </form>
                </div>
            </div>
        </div>
        <div class="uk-margin-medium-top">

            <table class="uk-table uk-table-striped ">
                <thead>
                    <tr>
                        <th>@sortablelink('nick', 'Nick')</th>
                        <th>@sortablelink('firstname', 'Name')</th>
                        <th>@sortablelink('lastname', 'Last Name')</th>
                        <th>@sortablelink('team_id', 'Team')</th>
                        <th>@sortablelink('player_role_id', 'Role')</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach( $players as $player)
                     @if( $player->team->status == 'PUBLISHED')
                    <tr class="uk-animation-fade">
                        <td class="bold-text">
                            <a style="color: #7f7f7f;" href="https://playoverwatch.com/career/psn/{{ $player->psn }}" target="_blank">
                            {{ $player->nick }}</a></td>
                        <td>{{ $player->firstname }}</td>
                        <td>{{ $player->lastname }}</td>
                        <td class="bold-text"><img style=" width: 30px; height: auto;" src="{{ Voyager::image($player->team->logo) }}"> {{ $player->team->name }}</td>
                        <td><span class="player-role {{ $player->role->icon}}"></span> {{ $player->role->name }}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            <span class="uk-pagination uk-flex-center">{{ $players->links() }}</span>
        </div>
    </div> {{-- Conteainer close --}}
@endsection
