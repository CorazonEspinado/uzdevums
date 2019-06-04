<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
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
        $teamList = Team::all();
        return view('partials.players.new-player', compact('teamList'));
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
            'new_player_first_name' => 'required|max:50',
            'new_player_last_name' => 'required|max:50',
            'new_player_team' => 'required',
        ]);
        $playerStore=new Player();
        $playerStore->first_name=$request->new_player_first_name;
        $playerStore->last_name=$request->new_player_last_name;
        $playerStore->team_id=$request->new_player_team;
        $playerStore->save();
        return redirect()->route('main')->with('status', 'Player created!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);
        $teams = Team::all();
        return view('partials.players.edit-player', compact('player', 'teams'));
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
            'updated_player_first_name' => 'required|max:50',
            'updated_player_last_name' => 'required|max:50',
        ]);
        Player::where('id', $request->player_id)
            ->update([
                'first_name' => $request->updated_player_first_name,
                'last_name' => $request->updated_player_last_name,
                'team_id' => $request->players_new_team
            ]);
        return redirect()->route('main')->with('status', 'Player updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        Player::destroy($id);
        return redirect()->route('main')->with('status',
            'Player deleted!');
    }
}
