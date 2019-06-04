@extends('layouts.app')
@section('title')
    Edit Team
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
                <form method="post" action="{{url('update-team')}}" >
                    @csrf
                     <div class="form-group">
                        <label for="team">Team name<span style="color: red">*</span> </label>
                        <input type="text" class="form-control" id="team" aria-describedby="team"
                               name="updated_team_name" placeholder="Team name" value="{{$team->name}}">
                        <input type="hidden" name="team_id" value="{{$team->id}}">
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection