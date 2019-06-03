
<table class="table" cellspacing="5">
@if (Auth::user())
    <a class="btn btn-success" href="{{url('new-team')}}">New team</a>
    @endif
<thead>
<tr>
    <th>Team id</th>
    <th>Team name</th>
    <th>Creation date</th>
    @if (Auth::user())
        <th>Actions</th>
        @endif
</tr>
</thead>
<tbody>
@foreach ($teams as $team)
<tr>
<td>{{$team->id}}</td>
    <td>{{$team->name}}</td>
    <td>{{$team->created_at}}</td>
    @if (Auth::user())
    <td><a class="btn btn-warning" href="{{url('edit-team', ['id'=>$team->id])}}">Edit</a>
    <a class="btn btn-danger" href="{{url('delete-team',['id'=>$team->id])}}">Delete</a>
        <a class="btn btn-info" href="{{url('team-info',['id'=>$team->id])}}">Team-info</a> </td>
    @endif
</tr>
    @endforeach


</tbody>
</table>
{{ $teams->links() }}
