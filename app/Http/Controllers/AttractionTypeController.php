<?php

namespace App\Http\Controllers;

use App\Models\AttractionType;
use App\Http\Requests\AttractionType\StoreAttractionType;
use App\Http\Requests\AttractionType\UpdateAttractionType;


class AttractionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attractions = AttractionType::all();
        return response()->json(['payload' => $attractions]);
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
     * @param  \App\Http\Requests\AttractionType\StoreAttractionType  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttractionType $request)
    {
        $attraction = AttractionType::create($request->validated());
        return response()->json(['payload' => $attraction,'message' => 'attraction created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attraction = AttractionType::all()->find($id);
        if(is_null($attraction)) {
            return response()->json('attraction not found',404);
        }
        return response()->json(['payload' => $attraction]);
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
     * @param  \App\Http\Requests\AttractionType\UpdateAttractionType  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttractionType $request, $id)
    {
        $attraction = AttractionType::all()->find($id);
        if(is_null($attraction)){
            return response()->json(['attraction not found']);
        }
        $attraction->update($request->all());
        return response()->json(['payload' => $attraction, 'message' => 'attraction updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attraction = AttractionType::all()->find($id);
        if(is_null($attraction)) {
            return response()->json('attraction not found',404);
        }
        $attraction->delete();
        return response()->json(['payload' => $attraction, 'message' => 'attraction deleted']);
    }
}
