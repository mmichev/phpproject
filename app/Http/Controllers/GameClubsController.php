<?php

namespace App\Http\Controllers;

use App\GameClub;
use Illuminate\Http\Request;

class GameClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gameclubs = GameClub::all();
        return view('GameClubs.index')->with('gameclubs',$gameclubs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('GameClubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
        'Name' =>'required',
        'Capacity' =>'required',
        'GameName' =>'required',
        ));
        
        $gameclubs = new GameClub;
        $gameclubs['Name'] =$request ->get('Name');
        $gameclubs['Capacity'] =$request ->get('Capacity');
        $gameclubs['GameName'] =$request ->get('GameName');
        $gameclubs->save();
        return redirect('/gameclubs');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gameclub = GameClub::find($id);
        return view('GameClubs.show', compact('gameclub','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gameclub = GameClub::find($id);
        return view('GameClubs.edit' ,compact('gameclub','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,array(
        'Name' =>'required',
        'Capacity' =>'required',
        'GameName' =>'required',
        ));
        
        $gameclubs = GameClub::find($id);
        $gameclubs['Name'] =$request ->get('Name');
        $gameclubs['Capacity'] =$request ->get('Capacity');
        $gameclubs['GameName'] =$request ->get('GameName');
        $gameclubs->save();
        return redirect('/gameclubs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gameclub = GameClub::find($id);
        $gameclub->delete();

     return redirect('/gameclubs')->with('success', 'Stock has been deleted Successfully');         
    }
}
