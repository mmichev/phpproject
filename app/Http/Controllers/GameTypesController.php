<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameType;

class GameTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $gametypes = GameType::all();
        return view('GamesTypes.index')->with('gametypes',$gametypes);              
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('GamesTypes.create');
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
        'Type' =>'required',
        'Description' =>'required',
        ));
        
        $gametypes = new GameType;
        $gametypes['Type'] =$request ->get('Type');
        $gametypes['Description'] =$request ->get('Description');
        $gametypes->save();
        return redirect('/gametypes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gametype = GameType::find($id);
        return view('GameTypes.show', compact('gametype','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gametype = GameType::find($id);
        return view('GameTypes.edit' ,compact('gametype','id'));
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
        'Type' =>'required',
        'Description' =>'required',
        ));
        
        $gametypes = GameType::find($id);
        $gametypes['Type'] =$request ->get('Type');
        $gametypes['Description'] =$request ->get('Description');
        $gametypes->save();
        return redirect('/gametypes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
