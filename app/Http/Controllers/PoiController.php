<?php

namespace App\Http\Controllers;

use App\Filters\PoiFilter;
use App\Models\Poi;
use Illuminate\Http\Request;
use App\Http\Requests\Poi\StorePoiRequest;
use App\Http\Requests\Poi\UpdatePoiRequest;

class PoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poi = Poi::all();
        return response()->json(['payload' => $poi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePoiRequest $request)
    {
        $poi = Poi::create($request->all());
        return response()->json(['payload' => $poi,'message' => 'poi created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poi = Poi::all()->find($id);
        if (is_null($poi)) {
            return response()->json('poi not found',404);
        }
        return response()->json(['payload' => $poi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePoiRequest $request, $id)
    {
        $poi = Poi::all()->find($id);
        if (is_null($poi)){
            return response()->json(['category not found']);
        }
        $poi->update($request->all());
        return response()->json(['payload' => $poi, 'message' => 'poi updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poi = Poi::all()->find($id);
        if (is_null($poi)) {
            return response()->json('poi not found',404);
        }
        $poi->delete();
        return response()->json(['payload' => $poi, 'message' => 'poi deleted']);
    }

    public function search(PoiFilter $filter)
    {
        $pois = Poi::filter($filter)->get();
        return response()->json(['payload' => $pois]);
    }
}
