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

                <form method="post" action="{{url('store-new-player')}}">
                    @csrf
                    <div class="form-group">
                        <label for="player_first_name">Player`s first name<span style="color: red">*</span> </label>
                        <input type="text" class="form-control" id="player_first_name"
                               aria-describedby="player_first_name"
                               name="new_player_first_name" placeholder="Player`s first name">
                    </div>
                    <div class="form-group">
                        <label for="player">Player`s last name<span style="color: red">*</span> </label>
                        <input type="text" class="form-control" id="player_last_name"
                               aria-describedby="player_last_name"
                               name="new_player_last_name" placeholder="Last name">

                    </div>
                    <div class="form-group">
                        <label for="player">Team name<span style="color: red">*</span> </label>
                        <select id="player" name="new_player_team">
                            <option value="">Please select team</option>
                            @foreach ($teamList as $team)
                                <option value="{{$team->id}}">{{$team->name}}</option>
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection