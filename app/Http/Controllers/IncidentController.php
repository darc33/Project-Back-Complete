<?php

namespace App\Http\Controllers;

use App\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Incident::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incident = Incident::create($request->all());
        return $incident;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Incident::find($id)->typeincident;//->typeincident;//user;
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
        $incident= Incident::findOrFail($id);
        $incident->update($request->only(['name',
                                          'description',
                                          'coordinate',
                                          'status',
                                          'imagen',
                                          'initial_datetime',
                                          'final_datetime']));
        return $incident;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incident= Incident::find($id);
        $incident->delete();
        return 'ok';
    }
}
