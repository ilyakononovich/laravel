<?php

namespace App\Http\Controllers;

use App\Models\Point;
use App\Http\Requests\Point\StorePointRequest;
use App\Http\Requests\Point\UpdatePointRequest;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $points = Point::all();
        return response()->json(['payload' => $points]);
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
     * @param  \App\Http\Requests\Point\StorePointRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePointRequest $request)
    {
        $point = Point::create($request->validated());
        return response()->json(['payload' => $point,'message'=>'point created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $point = Point::all()->find($id);
        if(is_null($point)) {
            return response()->json('point not found',404);
        }
        return response()->json(['payload' => $point]);
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
     * @param  \App\Http\Requests\Point\UpdatePointRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePointRequest $request, $id)
    {
        $point = Point::all()->find($id);
        if(is_null($point)){
            return response()->json(['point not found']);
        }
        $point->update($request->all());
        return response()->json(['payload' => $point,'message' => 'point updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $point = Point::all()->find($id);
        if(is_null($point)) {
            return response()->json('point not found',404);
        }
        $point->delete();
        return response()->json(['payload' => $point,'message' => 'point deleted']);
    }
}
