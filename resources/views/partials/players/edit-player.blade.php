@extends('layouts.app')
@section('title')
    Edit Player
@endsection
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-8">
                Team: {{$player->team->name}}
                <form method="post" action="{{url('update-player')}}">
                    @csrf
                    <div class="form-group">
                        <label for="team">Player info<span style="color: red">*</span> </label>
                        <input type="text" class="form-control" id="player" aria-describedby="team"
                               name="updated_player_first_name" placeholder="Team name" value="{{$player->first_name}}">
                        <input type="hidden" name="player_id" value="{{$player->id}}">

                    </div>
                    <div class="form-group">
                        <label for="player">Team name<span style="color: red">*</span> </label>
                        <input type="text" class="form-control" id="player" aria-describedby="team"
                               name="updated_player_last_name" placeholder="Team name" value="{{$player->last_name}}">

                    </div>
                    <div class="form-group">
                        <label for="player">Team name<span style="color: red">*</span> </label>
                        <select id="player" name="players_new_team">
                            <option value="{{$player->team->id}}">{{$player->team->name}}<span style="color: red">-(current team)</span>
                            </option>
                            @foreach ($teams as $team)
                                @if ($team->id !=$player->team->id)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection