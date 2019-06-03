<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.teams.new-team');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required|max:50',
        ]);
        $teamStore = new Team();
        $teamStore->name = $request->team_name;
        $teamStore->save();
        return redirect()->route('main')->with('status', 'Team created!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teamInfo=Team::find($id);
        return view('partials.teams.team-info', compact('teamInfo'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $team = Team::find($id);
        return view('partials.teams.edit-team', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'updated_team_name' => 'required|max:50',
        ]);
        $teamUpdate = Team::find($request->team_id);
        Team::where('id', $teamUpdate->id)
            ->update([
                'name' => $request->updated_team_name
            ]);
        return redirect()->route('main')->with('status', 'Team updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teamDelete = Team::find($id);
        if (count($teamDelete->players()->get()) > 0) {
            return redirect()->route('main')->with('error',
                'Cannot delete team with players in it. Delete players first!');
        } else {
            Team::destroy($id);
            return redirect()->route('main')->with('status',
                'Team deleted!');
        }
    }
}
