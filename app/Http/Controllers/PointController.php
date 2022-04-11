<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\Point\storepointrequest;

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
        return response()->json($points);
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
    public function store(storepointrequest $request)
    {
        $point = Point::create([
           'title' => $request->title,
           'longitude' => $request->longitude,
           'latitude' => $request->latitude,
           'description' => $request->description
        ]);
        $point->attractions()->attach($request->attraction_id);
        return response()->json(['Point created']);
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
        return response()->json($point);
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
    public function update(Request $request, $id)
    {
        $point = Point::find($id);
        $point->update($request->all());
        return response()->json([$point]);
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
        return response()->json('point deleted');
    }
}
