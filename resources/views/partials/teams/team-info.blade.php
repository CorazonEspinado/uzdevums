@extends('layouts.app')
@section('title')
    Team info
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
    <a class="btn btn-info" href="{{url('/')}}">Back</a>
    <h1>Team "{{$teamInfo->name}}"</h1>

    <table class="table" cellspacing="5">
        <thead>
        <tr>
            <th>Id</th>
            <th>First name</th>
            <th>Last name</th>
        </tr>
        </thead>
        @foreach ($teamInfo->players as $player)
            <tr>
                <td>{{$player->id}}</td>
                <td>{{$player->first_name}}</td>
                <td>{{$player->last_name}}</td>
            </tr>
        @endforeach
    </table>
            </div>
        </div>
    </div>
@endsection
