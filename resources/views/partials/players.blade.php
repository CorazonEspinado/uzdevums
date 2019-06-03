<table class="table" cellspacing="5">
    @if (Auth::user())
        <a class="btn btn-success">New player</a>
    @endif
    <thead>
    <tr>
        <th>Team</th>
        <th>First name</th>
        <th>Last name</th>
        @if (Auth::user())
            <th>Actions</th>
        @endif
    </tr>
    </thead>
    <tbody>
    @foreach ($teams as $team)
        <tr>
            @foreach ($team->players as $player)
                <td>{{$team->name}}</td>
                <td>{{$player->first_name}}</td>
                <td>{{$player->last_name}}</td>
                @if (Auth::user())
                    <td><a class="btn btn-warning" href="{{url('edit', ['id'=>$player->id])}}">Edit</a>
                        <a class="btn btn-danger" href="{{url('delete-player', ['id'=>$player->id])}}">Delete</a>
                    </td>
                @endif
        </tr>
    @endforeach




    @endforeach


    </tbody>
</table>